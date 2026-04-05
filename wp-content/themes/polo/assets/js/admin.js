jQuery(document).ready(function ($) {

	var tgm_media_frame;
	var image_field;

	//Add image button
	jQuery(document.body).on("click", '.add-item-image', function (e) {
		image_field = $(this).siblings("input.widget_image_add");
		e.preventDefault();
		if (tgm_media_frame) {
			tgm_media_frame.open();
			return false;
		}

		tgm_media_frame = wp.media.frames.tgm_media_frame = wp.media({
			frame   : 'select',
			multiple: false,
			library : {type: 'image'}
		});

		tgm_media_frame.on("select", function () {
			var media_attachment = tgm_media_frame.state().get('selection').first().toJSON();
			var image_link = media_attachment.url;
			jQuery(image_field).val(image_link);
		});
		// Now that everything has been set, let's open up the frame.
		tgm_media_frame.open();
	});

	//Remove image button
	jQuery(".remove-item-image").on("click", function () {
		$(this).siblings('input.widget_image_add').val("");
		return false;
	});

	//Add images
	jQuery(document.body).on("click", '.add-item-images', function (e) {
		image_field = $(this).siblings("input.widget_images_add");
		e.preventDefault();
		if (tgm_media_frame) {
			tgm_media_frame.open();
			return false;
		}

		tgm_media_frame = wp.media.frames.tgm_media_frame = wp.media({
			frame   : 'select',
			multiple: true,
			library : {type: 'image'}
		});

		tgm_media_frame.on('select', function () {
			var selection = tgm_media_frame.state().get('selection');
			var ids = [];
			var i = 0;
			selection.map(function (attachment) {
				attachment = attachment.toJSON();
				ids[i] = attachment.id;
				i++;
			});
			var img_ids = ids.join(',');
			jQuery(image_field).val(img_ids);
		});

		tgm_media_frame.open();
	});

	//Remove images button
	jQuery(".remove-item-images").on("click", function () {
		$(this).siblings('input.widget_images_add').val("");
		return false;
	});

});

