(function( $, window, undefined ) {
  $.danidemo = $.extend( {}, {
    
    addLog: function(id, status, str){
      var d = new Date();
      var li = $('<li />', {'class': 'demo-' + status});
       
      var message = '[' + d.getHours() + ':' + d.getMinutes() + ':' + d.getSeconds() + '] ';
      
      message += str;
     
      li.html(message);
      
      $(id).prepend(li);
    },

      /*'<div class="progress progress-striped active">'+
          '<div class="progress-bar" role="progressbar" style="width: 0%;">'+
      '<span class="sr-only">0% Complete</span>'+
      '</div>'+
      '</div>'+*/
    
    addFile: function(id, i, file){
		var template = '<div id="demo-file' + i + '">' +
		                   '<span class="demo-file-id">#' + i + '</span> - ' + file.name + ' <span class="demo-file-size">(' + $.danidemo.humanizeSize(file.size) + ')</span> - Status: <span class="demo-file-status">Waiting to upload</span>'+
                            '<div class="progress progress-success progress-striped" style="color: #000099" data-percent="0%">' +
                                '<div class="bar" style="width:0%;"></div>' +
                            '</div>' +

		               '</div>';
		               
		var i = $(id).attr('file-counter');
		if (!i){
			$(id).empty();
			
			i = 0;
		}
		
		i++;
		
		$(id).attr('file-counter', i);
		
		$(id).prepend(template);
	},
	
	updateFileStatus: function(i, status, message){
		$('#demo-file' + i).find('span.demo-file-status').html(message).addClass('demo-file-status-' + status);
	},
	
	updateFileProgress: function(i, percent){
		$('#demo-file' + i).find('div.bar').width(percent);
		
		$('#demo-file' + i).find('span.sr-only').html(percent + ' Complete');
        //$('#demo-file' + i).find('div.progress progress-success progress-striped').data-percent(percent + '%');
        $('#demo-file' + i).find('div.progress').attr('data-percent',percent)
	},
	
	humanizeSize: function(size) {
      var i = Math.floor( Math.log(size) / Math.log(1024) );
      return ( size / Math.pow(1024, i) ).toFixed(2) * 1 + ' ' + ['B', 'kB', 'MB', 'GB', 'TB'][i];
    }

  }, $.danidemo);
})(jQuery, this);

