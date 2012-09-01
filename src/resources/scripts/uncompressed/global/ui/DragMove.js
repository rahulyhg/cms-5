(function($) {

/**
 * Drag Move
 */
blx.ui.DragMove = blx.ui.BaseDrag.extend({

	onDrag: function(items, settings)
	{
		this.$targetItem.css({
			left: this.mouseX - this.targetItemMouseDiffX,
			top:  this.mouseY - this.targetItemMouseDiffY
		});
	}

});

})(jQuery);
