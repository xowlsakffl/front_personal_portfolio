<!-- 팝업 레이어 -->
<div id="layerPopup" class="dim-layer" onClick="layer_popup_off();">
    <div class="re-position">
        <div class="dimBg"></div>
        <div class="pop-layer">
            <div class="pop-container">
                <div class="pop-conts">
                    <p class="ctxt mb20">
                        
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
//레이어 실행    
$(document).ready(function()
{
    //layer_popup('아 죽거따'); 
});
//창 띄워
function layer_popup(msg){
    $("#layerPopup").find(".ctxt").html(msg).end().fadeIn();
    // 적합한 크기
    // let docWidth = $(document).width();
    // let docHeight = $(document).height();
    // console.log(docWidth + " " + docHeight);
}
//창 내려
function layer_popup_off(){
    $("#layerPopup").hide(); 
}
</script>

<style>    
.pop-layer .pop-container {
  padding: 20px 25px;
}
.pop-layer p.ctxt {
    color: #212121;
    line-height: 25px;
    overflow: hidden;
    font-family: 'Noto Sans KR', sans-serif;
    font-weight: bold;
    text-align: center;
}
.pop-layer p.ctxt p{
    font-size:15px;
    color:#333;
    font-family: 'Noto Sans KR', sans-serif;
    font-weight: bold;
}
.pop-layer .btn-r {
  width: 100%;
  margin: 10px 0 20px;
  padding-top: 10px;
  border-top: 1px solid #DDD;
  text-align: right;
}
.pop-layer {
  display: none;
  position: absolute;
  max-width: 350px;
  width: 90%;
  border-radius: 15px;
  height: auto;
  background-color: #fff;
  border: 2px solid #39A17F;
  z-index: 10;
}
.dim-layer {
  display: none;
  position: fixed;
  _position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 100;
}
.dim-layer .re-position{
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
}
.dim-layer .dimBg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #000;
  opacity: .5;
  filter: alpha(opacity=50);
}
.dim-layer .pop-layer {
  display: block;
}
a.btn-layerClose {
  display: inline-block;
  padding: 0 14px 0;
  border: 1px solid #304a8a;
  background-color: #3f5a9d;
  font-size: 13px;
  color: #fff;
  line-height: 25px;
}
a.btn-layerClose:hover {
  border: 1px solid #091940;
  background-color: #1f326a;
  color: #fff;
}
</style>