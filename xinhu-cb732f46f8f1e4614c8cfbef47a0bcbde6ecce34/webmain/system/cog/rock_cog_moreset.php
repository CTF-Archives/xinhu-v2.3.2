<?php if(!defined('HOST'))die('not access');?>
<script>
$(document).ready(function(){
	
	var c = {
		init:function(){
			
		},
		tesgs:function(o1,lx){
			$('#tagsl{rand}').find('li').removeClass('active');
			o1.className='active';
			$('#tablstal0{rand}').hide();
			$('#tablstal1{rand}').hide();
			$('#tablstal2{rand}').hide();
			$('#tablstal3{rand}').hide();
			$('#tablstal'+lx+'{rand}').show();
		},
		savecog:function(o1,lx){
			var msgid = 'msgview'+lx+'_{rand}';
			var da = js.getformdata('form'+lx+'_{rand}');
			js.setmsg('保存中...','', msgid);
			da.stype = lx;
			js.ajax(js.getajaxurl('savemoreset','{mode}','{dir}'), da, function(s){
				if(s=='ok'){
					js.setmsg('保存成功','green', msgid);
				}else{
					js.setmsg(s,'', msgid);
				}
			},'post');
		}
	};
	js.initbtn(c);
	c.init();
	
});
</script>
<div style="padding:10px 30px">
	
	<ul id="tagsl{rand}" class="nav nav-tabs">
	  
	  <li click="tesgs,0" class="active">
		<a style="TEXT-DECORATION:none"><i class="icon-cog"></i> 基本设置</a>
	  </li>
	  <li id="passli{rand}" style="display:none" click="tesgs,1">
		<a style="TEXT-DECORATION:none">阿里云短信</a>
	  </li>

	</ul>

	<div style="padding-top:20px">
		
		<form  id="tablstal0{rand}" name="form0_{rand}">
			<table cellspacing="0"  border="0" cellpadding="0">
			
			
			<tr><td align="right" style="color:gray">系统标题：</td><td><input name="title" type="text" value="<?=getconfig('title')?>" style="width:300px" class="form-control"></td></tr>
			<tr><td height="10"></td></tr>
			
		
			
			<tr><td align="right" style="color:gray">图片压缩尺寸：</td><td><input name="imgcompress" type="text" value="<?=getconfig('imgcompress')?>" style="width:150px" placeholder="不设置不压缩" class="form-control">
			<span style="color:#aaaaaa;">仅对jpg文件压缩格式：宽x高，如800x1000</span>
			</td></tr>
			<tr><td height="10"></td></tr>
			
		

			<tr>
				<td  align="right"></td>
				<td align="left"><button click="savecog,0" class="btn btn-success" type="button"><i class="icon-save"></i>&nbsp;保存</button>&nbsp;<span id="msgview0_{rand}"></span>
			</td>
			</tr>
		
			</table>
		</form>
	
	
	<form  id="tablstal1{rand}" style="display:none" name="form_{rand}">
	<table cellspacing="0"  cellpadding="0">
	<tr>
		<td width="100" align="right" height="50">旧密码：</td>
		<td><input style="width:250px" name="passoldPost" type="password" class="form-control"></td>
	</tr>
	
	<tr>
		<td align="right" height="70">新密码：</td>
		<td><input style="width:250px" name="passwordPost" placeholder="至少4位字母+数字组合" type="password" class="form-control"></td>
	</tr>
	
	<tr>
		<td align="right" height="70">确认密码：</td>
		<td><input style="width:250px" name="password1Post" type="password" class="form-control"></td>
	</tr>
	

	
	<tr>
	<td height="60" align="right"></td>
	<td align="left"><input class="btn btn-success" click="savepass" name="submitbtn" value="修改" type="button">&nbsp;<span id="msgview_{rand}"></span>
	</td>
	</tr>
	
	</table>
	</form>
	
	
	

	</div>
</div>