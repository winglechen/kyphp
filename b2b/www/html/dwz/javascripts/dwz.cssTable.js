/**
 * Theme Plugins
 * @author ZhangHuihua@msn.com
 */
(function($){
	$.fn.extend({
		cssTable: function(options){

			return this.each(function(){
				var $this = $(this);
				var $trs = $this.find('tbody>tr');
				var $grid = $this.parent(); // table
				var nowrap = $this.hasClass("nowrap");
				
				$trs.hoverClass("hover").each(function(index){
					var $tr = $(this);
					if (!nowrap && index % 2 == 1) $tr.addClass("trbg");
					
					$tr.click(function(e){
						//$trs.filter(".selected").removeClass("selected");
                        if(e.target.tagName.toLowerCase() == 'input'){
						    $tr.toggleClass("selected");
                            return;
                        }
                        $tr.find('input:checkbox').each(function(e){
                            var obj = $(this);
                            if(obj.attr('checked')){
                                obj.attr('checked','');
						        $tr.removeClass("selected");
                            }else{
                                obj.attr('checked','checked');
						        $tr.addClass("selected");
                            }
                        });
                        
						/*var sTarget = $tr.attr("target");
						if (sTarget) {
							if ($("#"+sTarget, $grid).size() == 0) {
								$grid.prepend('<input id="'+sTarget+'" type="hidden" />');
							}
							$("#"+sTarget, $grid).val($tr.attr("rel"));
						}*/
					});
					
				});

				$this.find("thead [orderField]").orderBy({
					targetType: $this.attr("targetType"),
					asc: $this.attr("asc") || "asc",
					desc:  $this.attr("desc") || "desc"
				});
			});
		}
	});
})(jQuery);
