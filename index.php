<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml" xml:lang="vi-vn" lang="vi-vn">
<?php
    $read = @fopen('ti_gia.txt', "r");
    $info = fgets($read);
    $ti_gia = explode(",", $info);
?>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>Nhum Dịch Vụ</title>
  <script src="jquery.min.js" type="text/javascript"></script>
  <script src="plugins/system/jqueryeasy/jquerynoconflict.js" type="text/javascript" defer="defer"></script>
  <script src="media/system/js/mootools-core.js" type="text/javascript" defer="defer"></script>
  <script type="text/javascript">

  </script>


  <link href="/plugins/system/jat3/jat3/base-themes/default/images/favico.ico" rel="shortcut icon"
    type="image/x-icon" />
  <link rel="stylesheet" href="templates/ja_social/css/template.css" type="text/css">
  <link rel="canonical" href="https://nhumdichvu.com/">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
  <link rel="stylesheet" href="templates/responsive/responsive.css" type="text/css">
  <script defer="defer" type="text/javascript" src="templates/responsive/responsive.js"></script>
</head>

<body id="bd" class="bd fs3 com_content  bodyhome_bd">
  <div id="ja-khungchinh">
    <div class="main">
      <div id="ja-header">
        <div class="header1">
          <div class="main2">
            <div class="header1_1">

            </div>
            <div class="header1_2">

            </div>
            <div class="header1_3">

            </div>
          </div>
        </div>
        <div class="header2">
          <div class="main2">
            <div class="header2_1">

            </div>
            <div class="header2_2">

            </div>
            <div class="header2_3">

            </div>
            <div class="header2_4">

            </div>
          </div>
        </div>
      </div>
      <div id="ja-menungang">
        <div class="menungang">
          <div class="main2">

          </div>
        </div>
      </div>
      <div id="ja-slideshow">
        <div class="slideshow1">
          <div class="main2">
            <div class="ja-workshome" id="Mod415">
              <div class="workshome-content">


                <div class="custom">
                  <p><img src="images/banner.png" alt="huy.jpg" /></p>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="slideshow2">
          <div class="main2">
            <div class="ja-workshome" id="Mod409">
              <div class="workshome-content">


                <div class="custom">
                  <p>Tỷ giá biến động liên tục. Hãy hỏi trước khi giao dịch!</p>
                </div>
              </div>
            </div>

            <div class="ngaythang"><span style="color: white;" id="time"></span><span style="color: white;" class="ngay" id="ngay"></span>
            </div>
          </div>
        </div>
        <div id="ja-dinhhuong">
          <div class="dinhhuong1">
            <div class="main2">

            </div>
          </div>
        </div>
        <div id="ja-extra">
          <div class="extra1">
            <div class="main2">
              <div class="ja-workshome" id="Mod410">
                <div class="workshome-title">
                  <h2><span>Tỷ giá chuyển đổi</span></h2>
                </div>
                <div class="workshome-content">


                  <div class="custom">
                    <p>
                    <table style="width: 100%;">
                      <tbody>
                        <tr>
                          <td>
                            <div class="text-inner text-center">
                              <h3 class="title-mb uppercase"><strong>TỶ GIÁ MUA</strong></h3>
                              <h2 class="title-mobile" style="text-align: center;"><span><strong
                                    class="giamua"><?= $ti_gia[0] ?></strong></span></h2>
                            </div>
                          </td>
                          <td>
                            <div class="text-inner text-center">
                              <h3 class="title-mb uppercase"><strong>TỶ GIÁ BÁN</strong></h3>
                              <h2 class="title-mobile" style="text-align: center;"><span><strong
                                    class="giaban"><?= $ti_gia[1] ?></strong></span></h2>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    </p>
                  </div>
                </div>
              </div>
              <div class="ja-workshome" id="Mod411">
                <div class="workshome-content">


                  <div class="custom">
                    <div class="form-chuyendoi-html">
                      <div class="form-group row row-large">

                        <div class="medium-6 medium-vnd">

                          <p>Số tiền VNĐ</p>

                          <input id="gia-vnd-rbg" name="textinput" type="text" placeholder="vnđ"
                            class="form-control input-md">

                        </div>

                        <div class="medium-6 medium-cny">

                          <p>Số tiền CNY</p>

                          <input id="gia-cny-rbg" name="textinput" type="text" placeholder="cny"
                            class="form-control input-md" disabled="disabled">

                        </div>

                      </div>
                      <div class="text-center"> <button id="switch_currency"><i
                            class="fas fa-exchange-alt"></i></button></div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="extra2">
            <div class="main2">
              <div class="extra2_1">
                <div class="ja-workshome" id="Mod139">
                  <div class="workshome-content">


                    <div class="custom">
                      <h1>SON THI NHUM <br />UY TÍN TẠO NÊN THƯƠNG HIỆU</h1>
                      <p><strong>Địa chỉ :</strong> Vĩnh Châu, Sóc Trăng</p>
                      <p><strong>Hotline :</strong> 0379 492 358</p>
                      <p><strong>ID Wechat :</strong> Jaenhum_0126 </p>
                      <p>&nbsp;</p>
                      <h3>THÔNG TIN CHUYỂN KHOẢN</h3>
                      <p><strong>TECHCOMBANK :</strong> 1903112317018</p>
                      <p><strong>SACOMBANK :</strong> 070101554722</p>
                    </div>
                  </div>
                </div>

              </div>
              <div class="extra2_2">
                <div class="ja-workshome" id="Mod413">
                  <div class="workshome-content">


                    <div class="custom">
                      <div class="cot">

                        <h3>Wechat</h3>

                        <p><img src="images/wc.jpg" width="430" height="430" alt="wechat" /></p>

                      </div>

                      <div class="cot">

                        <h3>Zalo</h3>

                        <p><img src="images/zl.jpg" width="520" height="520" alt="zalo" /></p>

                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div id="ja-noidunggiua" class="noleft noright">
          <div class="main2">
            <div id="ja-cotgiua">
              <div class="errorclass" style="display:none;">
                <div id="system-message-container">
                </div>
              </div>
              <div class="noidungtren1">

              </div>
              <div class="noidungtren2">

              </div>
              <div class="noidungduoi1">

              </div>
              <div class="noidungduoi2">

              </div>
            </div>
          </div>
        </div>
        <div id="ja-chantrang">
          <div class="footer1">
            <div class="main2">

            </div>
          </div>
          <div class="footer2">
            <div class="main2">
              <div class="footer2_1">

              </div>
              <div class="footer2_2">

              </div>
              <div class="footer2_3">

              </div>
            </div>
          </div>
          <div class="footer3">
            <div class="main2">
              <p style="font-family: 'Roboto Condensed', Helvetica,Arial,sans-serif; font-size: 120%;"><a
                  href=""> </a> <a
                  href=""></a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="debug">
      <div class="ja-workshome" id="Mod414">
        <div class="workshome-content">


          <div class="custom">
            <div class="float-icon-hotline">
              <ul>
                <li class="hotline_float_icon"><a id="messengerButton" href="tel:0379492358" rel="nofollow"><i
                      class="fa icon-phone animated infinite tada">&nbsp;</i><span>Hotline: 0379 492 358</span></a></li>
                <li class="hotline_float_icon"><a id="messengerButton" href="//zalo.me/0379492358" rel="nofollow"><i
                      class="fa fa-zalo animated infinite tada"></i><span>Nhắn tin qua Zalo</span></a>&nbsp;</li>
                <li class="hotline_float_icon"><a id="messengerButton"
                    href="https://api.whatsapp.com/send?phone=15132730909&text=I%20am%20interested%20in%20your%20service"
                    rel="nofollow"><i class="fa icon-whatsapp animated infinite tada">&nbsp;</i><span>Wechat</span></a>
                </li>
              </ul>
            </div>
            <p>
              <style scoped="scoped" type="text/css">
                #ja-slideshow img {
                  width: 100%;
                  height: auto;
                }

                .icon-whatsapp:before {
                  content: "\f232";
                  font-family: fontawesome;
                  font-size: 170%;
                }

                .float-icon-hotline {
                  display: block;
                  width: 40px;
                  position: fixed;
                  bottom: 150px;
                  right: 45px;
                  z-index: 999999;
                }

                .float-icon-hotline ul {
                  display: block;
                  width: 100%;
                  padding-left: 0;
                  margin-bottom: 0;
                  list-style: none;
                }

                .float-icon-hotline ul li {
                  display: block;
                  width: 100%;
                  position: relative;
                  margin-bottom: 10px;
                  cursor: pointer;
                }

                .float-icon-hotline a[href^="tel"] {
                  text-decoration: none;
                  color: #ffe54a;
                }

                .float-icon-hotline ul li .fa {
                  background-color: #ed1c24;
                  display: block;
                  width: 40px;
                  height: 40px;
                  text-align: center;
                  line-height: 36px;
                  -moz-box-shadow: 0 0 5px #888;
                  -webkit-box-shadow: 0 0 5px#888;
                  box-shadow: 0 0 5px #888;
                  color: #fff;
                  font-weight: 700;
                  border-radius: 50%;
                  position: relative;
                  z-index: 2;
                  border: 2px solid #fff;
                }

                .animated.infinite {
                  animation-iteration-count: infinite;
                }

                .animated {
                  animation-duration: 1s;
                  animation-fill-mode: both;
                }

                .tada {
                  animation-name: tada;
                }

                .fa {
                  display: inline-block;
                  font: normal normal normal 14px/1 FontAwesome;
                  font-size: inherit;
                  text-rendering: auto;
                  -webkit-font-smoothing: antialiased;
                  -moz-osx-font-smoothing: grayscale;
                }

                .float-icon-hotline ul li .fa-phone {
                  background-color: #ed1c24;
                }

                .float-icon-hotline ul li span {
                  display: inline-block;
                  padding: 0;
                  background-color: #ff6a00;
                  color: #fff;
                  border: 2px solid #fff;
                  border-radius: 20px;
                  height: 40px;
                  line-height: 36px;
                  position: absolute;
                  top: 0;
                  right: 15px;
                  z-index: 0;
                  width: 0;
                  overflow: hidden;
                  -webkit-transition: all 1s;
                  transition: all 1s;
                  background-color: #ff6a00;
                  -moz-box-shadow: 0 0 5px #888;
                  -webkit-box-shadow: 0 0 5px#888;
                  box-shadow: 0 0 5px #888;
                  font-weight: 400;
                  white-space: nowrap;
                  opacity: 0;
                }

                .float-icon-hotline ul li .fa-zalo {
                  background: #ef0303 url(images/zalo-icon.png) center center no-repeat;
                }

                .float-icon-hotline ul li .fa-fb {
                  background: url(images/fb-chat.png) center center no-repeat;
                }

                .fa-phone:before {
                  content: "\e600";
                }

                @keyframes tada {
                  0% {
                    transform: scale3d(1, 1, 1);
                  }

                  10%,
                  20% {
                    transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
                  }

                  30%,
                  50%,
                  70%,
                  90% {
                    transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
                  }

                  40%,
                  60%,
                  80% {
                    transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
                  }

                  100% {
                    transform: scale3d(1, 1, 1);
                  }

                  body .has-mobile-menu.wpex-mobile-toggle-menu-fixed_top {
                    padding-top: 36px;
                  }
                }

                .float-icon-hotline ul li span {
                  display: inline-block;
                  padding: 0;
                  background-color: #ff6a00;
                  color: #fff;
                  border: 2px solid #fff;
                  border-radius: 20px;
                  height: 40px;
                  line-height: 36px;
                  position: absolute;
                  top: 0;
                  right: 15px;
                  z-index: 0;
                  width: 0;
                  overflow: hidden;
                  -webkit-transition: all 1s;
                  transition: all 1s;
                  background-color: #ff6a00;
                  -moz-box-shadow: 0 0 5px #888;
                  -webkit-box-shadow: 0 0 5px#888;
                  box-shadow: 0 0 5px #888;
                  font-weight: 400;
                  white-space: nowrap;
                  opacity: 0;
                }

                .float-icon-hotline ul li:hover span {
                  width: 180px;
                  padding-left: 30px;
                  padding-right: 10px;
                  opacity: 1;
                }

                .icon-phone:before {
                  content: "\f095";
                  font-family: fontawesome;
                  font-size: 170%;
                }

                .float-icon-hotline ul li .icon-whatsapp {
                  background-color: #00CD6E;
                }
                -->
              </style>
            </p>
          </div>
        </div>
      </div>

    </div>
    <div id="extra_js">
      <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
      <script defer="defer" type="text/javascript" src="templates/ja_social/css/codejava.js"></script>
    </div>
    <script type="application/ld+json" defer="defer">
	{
		"@context":"http://schema.org",
		"@type":"WebSite",
		"url":"https://nhumdichvu.com/"
	}
</script>
</body>

</html>