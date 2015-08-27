<div id="sf_admin_container">

<h1>APC</h1>
 
<div id="sf_admin_bar">

<div class="sf_admin_filters">
<form >
  <fieldset>
    <h2>Tìm kiếm</h2>
    <div class="form-row">
    <label for="filters_partner_id">Keywords:</label>
    <div id="keywords">
      <a href="javascript:void(0);">booking_cache</a>, <a href="javascript:void(0);">frontend</a> 
      <p> <input id="keyword" style="width: 300px; padding: 10px; margin-top: 10px"/></p>
    </div>
    </div>

</form>
</div>
</div>
<div id="sf_admin_content">
<label for="checkall" style="float: left"><input type="checkbox" id="checkall"> CHECK ALL</label>
<ul class="sf_admin_actions">
  <li><input class="sf_admin_action_delete" value="Delete" type="button"></li>
</ul>
<table cellspacing="0" class="sf_admin_list">
<thead>
<tr><th class="rs_count" colspan="3"><?=sizeof($list)?> result</th></tr>
 
</thead>
<tfoot>
<tr><th class="rs_count"  colspan="3"><?=sizeof($list)?> result</th></tr>
</tfoot>
<tbody class="checkboxes">
<?php foreach($list as $i => $item):?>
<tr >
    <td><input type="checkbox" value="<?=$item['info']?>"/></td>
    <td><?=$item['info']?></td>
</tr>
<?php endforeach ?>
</tbody>
</table>
<ul class="sf_admin_actions">
  <li><input class="sf_admin_action_delete" value="Delete" type="button"></li>
</ul>
</div> 
</div>
<script>
  var list = [];
  <?php foreach($list as $i => $item):?>
  list.push('<?=$item['info']?>');
  <?php endforeach ?>
  
  $(document).ready(function() {
    
    $('#checkall').click(function() {
      
      $('.checkboxes input[type="checkbox"]').prop('checked', $('#checkall:checked').size() > 0);
    });
    $('.sf_admin_action_delete').click(function() {
      
      prepareDelete();
    });
    
    $('#keywords a').click(function() {
      
      var self = $(this);
      var t = self.text();
      $('#keyword').val(t);
      getMatch();
    });
    
    $('#keyword').keyup(function() {
      getMatch();
    });
  });
  
  function getMatch() {
    var t = $('#keyword').val();
    var trs = "";
    var c = 0;
    for(var i = 0; i < list.length; i++) {
      var k = list[i];
      if(k.indexOf(t) != -1) {
        c++;
        trs += '<tr><td><input type="checkbox" value="'+k+'"/></td><td>'+k+'</td></tr>';
      }
    }
    $('.rs_count').html(c+' result');
    $('.checkboxes').html(trs).checkboxes('range', true);
  }
  function prepareDelete() {
    var ips = $('.checkboxes input:checked');
    if(ips.size() > 0) {
      if(!confirm('Are you sure?')) {
        return;
      }
      var val = [];
      ips.each(function() {
        val.push($(this).val());
      });
      
      $.ajax({
           
          type: "POST",
          url: '<?=url_for('apc/delete')?>',
           
          data: {key: val},
          success: function(data) {
            alert(data);
            location.reload(true);
          },
          error: function () {
            alert("Hệ thống đang bận, bạn vui lòng thử lại sau ít phút");
          }
        });
       
    }
    else {
      alert('Chưa chọn');
    }
  }
</script>
 