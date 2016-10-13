<script type="text/javascript">
	
	$(document).ready(function () {

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

});
</script>
<style type="text/css">
	.scrollup {
    width: 50px;
    height: 50px;
    position: fixed;
    bottom: 50px;
    right: 14px;
    display: none;
    text-indent: -9999px;
    background: url('images/icontop.png') no-repeat;
    
    color:red;
}
</style>
@yield('footer')
    <div class="row">
        <div class="footer col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <dd>北海道札幌・帯広で財務を中心とした経営支援事業なら株式会社ジェイセカンドへ <br>
            株式会社ジェイセカンド <br>
            【本社】北海道帯広市西4条南15丁目9番地　共栄ビル1Ｆ <br>
            TEL:0155-24-7737 FAX:0155-28-4480 <br>
            Copyright (C) 2016 株式会社ジェイセカンド, All Rights Reserved.Produced by J-second</dd>
        </div>
    </div>