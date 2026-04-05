var albumBucketName = 'animatorka.sk';

AWS.config.region = 'eu-central-1'; // Region
AWS.config.credentials = new AWS.CognitoIdentityCredentials({
    IdentityPoolId: 'eu-central-1:88e999e9-d89d-40fe-bc51-5bc0d95d8b04',
});

var s3 = new AWS.S3({
    apiVersion: '2006-03-01',
    params: {Bucket: albumBucketName}
});

function getHtml(template) {
    return template.join('\n');
}

function listAlbums() {
    s3.listObjects({Delimiter: '/'}, function(err, data) {
        if (err) {
            return alert('There was an error listing your albums: ' + err.message);
        } else {
            var albums = data.CommonPrefixes.map(function(commonPrefix) {
                var prefix = commonPrefix.Prefix;
                var albumName = decodeURIComponent(prefix.replace('/', ''));
                return getHtml([
                    '<li>',
                    '<button style="margin:5px;" onclick="viewAlbum(\'' + albumName + '\')">',
                    albumName,
                    '</button>',
                    '</li>'
                ]);
            });
            var message = albums.length ?
                getHtml([
                    '<p>Click on an album name to view it.</p>',
                ]) :
                '<p>You do not have any albums. Please Create album.';
            var htmlTemplate = [
                '<h2>Albums</h2>',
                message,
                '<ul>',
                getHtml(albums),
                '</ul>',
            ]
            document.getElementById('viewer').innerHTML = getHtml(htmlTemplate);
        }
    });
}

function viewAlbum() {
    var albumName = 'sm';
    var albumPhotosKey = encodeURIComponent('sm') + '/';

    s3.listObjects({Prefix: albumPhotosKey}, function(err, data) {
        if (err) {
            return alert('There was an error viewing your album: ' + err.message);
        }
        // 'this' references the AWS.Request instance that represents the response
        var href = this.request.httpRequest.endpoint.href;
        var bucketUrl = href + albumBucketName + '/';

        var photos = data.Contents.map(function(photo) {
            var photoKey = photo.Key;

            var photoUrl = bucketUrl + encodeURIComponent(photoKey);

            return getHtml([


                '<div class="grid-item">',
                '<a class="image-hover-zoom" href="https://s3.eu-central-1.amazonaws.com/animatorka.sk/sm%2Ffoto-1.jpg" data-lightbox="gallery-image">',
                '<img src="'+photoUrl+'"/>',
                '</a>',
                '</div>',



            ]);
        });
        document.getElementById('viewer').innerHTML = getHtml(photos);
        //document.getElementsByTagName('img')[0].setAttribute('style', 'display:none;');



    });
}
