(function( $ ) {
    $.widget( "custom.combobox", {
      _create: function() {
        this.wrapper = $( "<span>" )
          .addClass( "custom-combobox" )
          .insertAfter( this.element );
 
        this.element.hide();
        this._createAutocomplete();
        //this._createShowAllButton();
				this.input.attr("placeholder", this.element.attr('placeholder'));
        
      }, 
      _createAutocomplete: function() {
        var selected = this.element.children( ":selected" ),
          value = selected.val() ? selected.text() : "";
				//value = removeMark(value);
        //alert(value+" selected");
        this.input = $( "<input>" )
          .appendTo( this.wrapper )
          .val( value )
          .attr( "title", "" ) 
          .addClass( "custom-combobox-input ui-widget ui-widget-content ui-state-default ui-corner-left" )
          .autocomplete({
            delay: 0,
            minLength: 0,
            source: $.proxy( this, "_source" ) 
          })
          .tooltip({
            tooltipClass: "ui-state-highlight"
          }); 
        this._on( this.input, {
          autocompleteselect: function( event, ui ) {
             
            ui.item.option.selected = true;
            this._trigger( "select", event, {
              item: ui.item.option
            });
						index = ui.item.option.index;
						callback = this.element.attr('callback');
						if(callback){
							eval(callback+'("'+this.element.attr('id')+'", '+index+');');
						}
						
          },
	
          autocompletechange: "_removeIfInvalid"
        });
      } ,
      _createShowAllButton: function() {
        var input = this.input,
          wasOpen = false;
 
        $( "<a>" )
          .attr( "tabIndex", -1 )
          .attr( "title", "Show All Items" )
          .tooltip()
          .appendTo( this.wrapper )
          .button({
            icons: {
              primary: "ui-icon-triangle-1-s"
            },
            text: false
          })
          .removeClass( "ui-corner-all" )
          .addClass( "custom-combobox-toggle ui-corner-right" )
          .mousedown(function() {
            wasOpen = input.autocomplete( "widget" ).is( ":visible" );
          })
          .click(function() {
            input.focus();
 
            // Close if already visible
            if ( wasOpen ) {
              return;
            }
 
            // Pass empty string as value to search for, displaying all results
            input.autocomplete( "search", "" );
          });
      },
 
      _source: function( request, response ) {
        var matcher = new RegExp( $.ui.autocomplete.escapeRegex(removeMark(request.term)), "i" );
        var count = 0;
         
        response( this.element.children( "option" ).map(function() {
          var text = $( this ).text();
					
          if ( this.value && ( !request.term || matcher.test(removeMark(text)) ))
						if(count < 10){
               
              count++;
              
              return {
                label: text,
                value: text,
                option: this
              };
            }
        }) );
      },
 
      _removeIfInvalid: function( event, ui ) {
        
         
        
        // Selected an item, nothing to do
         
        if ( ui.item ) {
          return;
        }
        
        // Search for a match (case-insensitive)
        var value = this.input.val(),
          valueLowerCase = value.toLowerCase(),
          valid = false;
        this.element.children( "option" ).each(function() {
          if ( removeMark($( this ).text().toLowerCase()) === removeMark(valueLowerCase) ) {
            this.selected = valid = true;
            return false;
          }
        });
 
        // Found a match, nothing to do
        if ( valid ) {
          
          return;
        }

        // Remove invalid value
        this.input
          .val( "" )
          .attr( "title", 'Không có tìm thấy phố có tên: '+value )
          .tooltip( "open" );
        this.element.val( "" );
        this._delay(function() {
          this.input.tooltip( "close" ).attr( "title", "" );
        }, 2500 );
        this.input.data( "ui-autocomplete" ).term = "";
      },
 
      _destroy: function() {
        this.wrapper.remove();
        this.element.show();
      }
    });
  })( jQuery );
	
function removeMark(str) {  
  str= str.toLowerCase();  
  str= str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a");  
  str= str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e");  
  str= str.replace(/ì|í|ị|ỉ|ĩ/g,"i");  
  str= str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o");  
  str= str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u");  
  str= str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y");  
  str= str.replace(/đ/g,"d");   
  return str;  
  }   
	 