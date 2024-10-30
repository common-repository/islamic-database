<?php
/*
Plugin Name: Islamic Database
Plugin URI: http://gocooldesign.com
Description: Islamic Database have lot of information about quran, hadees, islamic history & much more.
Version: 1.0
Author: Samiullah Kaifi
Author URI: http://gocooldesign.com
*/


define ( 'islamicDB_Plugin_url', plugin_dir_url(__FILE__)); // with forward slash (/).

function islamicDB_plugin_menu()
{
add_menu_page('Islamic Database' , 'Islamic Database', 'manage_options', 'islamicDB_plugin_page', 'islamicDB_plugin_page');
}
add_action('admin_menu', 'islamicDB_plugin_menu');





function islamicDB_plugin_page()
{

echo '<div class="wrap">';
echo '<div id="icon-options-general" class="icon32"></div>';
?>

<h2>Assalmu Alkum - السلام عليكم</h2>
<b>Welcome to Islamic Database!</b>
<p>Here you will find islamic data like Quran ,Hadees, History etc.</p>
<p>Use given shortcodes to implement into your wordpress section.</p>
<p>Working on other shortcodes & cool stuff.Please do update plugin and share :) Thanks</p>
<br>

<hr>
<p style="text-align:center;">بسم الله الرحمن الرحيم </p>
<p style="text-align:center;">اللَّهُمَّ صَلِّ عَلَى مُحَمَّدٍ وَعَلَى آلِ مُحَمَّدٍ
كَمَا صَلَّيْتَ عَلَى إِبْرَاهِيمَ وَعَلَى آلِ إِبْرَاهِيمَ
.إِنَّكَ حَمِيدٌ مَجِيدٌ
اللَّهُمَّ بَارِكْ عَلَى مُحَمَّدٍ، وَعَلَى آلِ مُحَمَّدٍ
كَمَا بَارَكْتَ عَلَى إِبْرَاهِيمَ وَعَلَى آلِ إِبْرَاهِيمَ
.إِنَّكَ حَمِيدٌ مَجِيدٌ
</p>
<hr>

<style>
.block {
    width: 100%;
    margin-bottom: 5px;
    overflow: hidden;
    padding: 5px 5px 5px 5px;
}

.block-t {
    background: url(https://5cdc004db6a5028979f79ec5377f58049bfd533f-www.googledrive.com/host/0Bzdhlg4tma9VZUV6azc4ZFBQMTQ/title-bg.jpg) repeat-x top;
    height: 36px;
    line-height: 36px;
    border-radius: 5px;
    width: 100%;
    color: #FFF;
    font-family: 'Droid Arabic Kufi', serif;
	text-align: center;
    font-size: 20px;
}
.block-t .icon {
    background: url(https://5cdc004db6a5028979f79ec5377f58049bfd533f-www.googledrive.com/host/0Bzdhlg4tma9VZUV6azc4ZFBQMTQ/icon.png) no-repeat top right;
    float: right;
    width: 64px;
    height: 40px;
    margin-top: -10px;
}
.block-t span{
	text-align:right;
	
	
	}

.block-c {
    width: 99%;
    background: #DBE2B6;
    padding: 5px;
    border-radius: 5px;
    height: 100%;
    color: #404729;
    overflow: hidden;
}

.qoraa {
    width: 31.3%;
    border: 1px solid #778248;
    border-radius: 5px;
    float: left;
    display: inline-block;
    padding: 3px;
    margin-left: 10px;
    background: url(https://5cdc004db6a5028979f79ec5377f58049bfd533f-www.googledrive.com/host/0Bzdhlg4tma9VZUV6azc4ZFBQMTQ/qoraa-bg.jpg) repeat-x #B7C288;
    overflow: hidden;
    margin-bottom: 5px;
}

.moshaf-bg {
    width: 100%;
    height: 100%;
    background: url(https://5cdc004db6a5028979f79ec5377f58049bfd533f-www.googledrive.com/host/0Bzdhlg4tma9VZUV6azc4ZFBQMTQ/moshaf.jpg) no-repeat left;
}
.qoraa a {
    color: #415615 !important;
    font-family: 'Droid Arabic Kufi', serif;
    font-size: 12px;
    text-decoration: none !important;
}

.clear {
    clear: both;
    overflow: hidden;
    height: 0;
}

.qoraa a {
    color: #415615 !important;
    font-family: 'Droid Arabic Kufi', serif;
    font-size: 12px;
    text-decoration: none !important;
}

</style>

<div class="block">
    <div class="block-t">
        <div class="icon"></div>
        <span>Holy Quran Recitation By Great Reciters - القرّاء</span>
    </div><!-- Block Title -->
                
    <div class="block-c" align="center" style="text-align:center;">
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/54">الرقية الشرعية من الكتاب والسنة</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/54">Alroqia Alshraia</a>
  <div class="clear"></div>
  [islamicDB-roqya width="" height=""]
  
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/57">عبدالباسط - مترجم انجليزي</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/57">Abdulbasit - English Translation</a>
  <div class="clear"></div>
  [islamicDB-english width="" height=""]
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/58">عبدالباسط - المرتل</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/58">Abdulbasit - Mortal</a>
  <div class="clear"></div>
  [islamicDB-abdulbasetm width="" height=""]
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/59">عبدالباسط - المجود</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/59">Abdulbasit - Mjawad</a>
  
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/60">عبدالبارئ الثبيتي</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/60">Abdulbari Athobaity</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/61">عبدالله عواد الجهني</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/61">Abdullah Awad Aljuhani</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/62">عبدالله بصفر</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/62">Abdullah Basfar</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/63">عبدالله خياط</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/63">Abdullah Khayat</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/64">عبدالمحسن القاسم</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/64">Abdulmohsem Alqasem</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/65">عبدالرحمن السديس</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/65">Abdulrahman Alsudais</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/66">عبدالودود مقبول حنيف</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/66">Abdulwadood Haneef</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/67">أبو بكر الشاطري</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/67">Abubakr Alshatari</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/68">عبدالعزيز بن صالح</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/68">Abdulaziz bin Saleh</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/69">أحمد علي الحذيفي</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/69">Ahmed Ali Alhodaifi</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/70">أحمد العجمي</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/70">Ahmed Alajmi</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/71">أحمد المصباحي</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/71">Ahmed Almesbahi</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/72">علي الحذيفي</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/72">Ali Alhodaifi</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/73">علي جابر</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/73">Ali Jaber</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/74">الحسيني العزازي</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/74">Alhusain Alazazi</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/75">عبدالولي الأركاني</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/75">Abdulwali Alarkani</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/76">بندر عبد العزيز بليلة</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/76">Bandr Balilah</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/77">فارس عباد</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/77">Fares Abbad</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/78">هاني الرفاعي</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/78">Hani Alrefaee</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/79">إدريس بن مـحـمـد أبكر</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/79">Idrees Abkar</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/80">إلهان توك</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/80">Ilhan Tok</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/81">إبراهيم الدوسري --- ورش</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/81">Aldossari - Warsh</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/82">خالد القحطاني</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/82">Khalid Alqahtani</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/83">خليفة الطنيجي</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/83">Khalifa Altunaiji</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/84">خالد الجليل</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/84">Khalid Aljeleel</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/85">مـاهر المـعيـقـلي</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/85">Maher Almuaiqly</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/86">مصطفى اللاهوني</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/86">Mustafa Allahouni</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/87">محمود خـلـيـل الحصري</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/87">Mahmoud Alhosary</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/88">ماجد الزامل</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/88">Majed Alzamil</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/89">مشاري العفاسي</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/89">Mishary Alafasy</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/90">مـحـمـد الـبـراك</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/90">Muhammed Albarak</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/91">مـحـمـد اللحيدان</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/91">Mohammed Allhidan</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/92">مـحـمـد أيوب - المرتل</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/92">Muhammed Ayoub - Mortal</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/93">مـحـمـد أيوب - رمضان</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/93">Muhammed Ayoub - Ramadan</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/94">مـحـمـد المنشاوي - المرتل</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/94">Alminshawi - Mortal</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/95">مـحـمـد الـمنشاوي - المجود</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/95">Alminshawi - Mjawad</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/96">مـحـمـد الـمنشاوي - المعلم</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/96">Alminshawi - Moalem</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/97">ناصر القطامي</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/97">Nasser Alqatami</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/98">سعد الغامدي</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/98">Saad Alghamdi</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/99">صـلاح البدير</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/99">Salah Albedair</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/100">صـلاح بو خاطر</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/100">Salah Bukhatir</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/101">سعود الشريم</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/101">Soud Elsherim</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/102">توفيق الصايغ</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/102">Tawfiq Alsayg</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/103">وليد الدليمي</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/103">Waleed Aldelami</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/104">يـاسـر الـدوسـري</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/104">Yasser Aldosari</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/105">ياسر الفيلكاوي</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/105">Yasser Alfailakawi</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/107">تلاوة الحرمين _ المسجد الحرام 1435</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/107">Makkah - Ramadan 1435H</a>
  </div>
  </div>
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/qraa/qaree/108">تلاوة الحرمين - المسجد النبوي 1435</a>
  <div class="clear"></div>
  <a href="http://quran.tv/qraa/qaree/108">Madinah - Ramadan 1435H</a>
  </div>
  </div>
                          
  
    </div><!-- Block Content -->
                
</div>

<div class="clear"></div>

<div class="block">
    <div class="block-t">
        <div class="icon"></div>
        <span>Download Items - عناصر تحميل</span>
    </div><!-- Block Title -->
                
    <div class="block-c" align="center" style="text-align:center;">
    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/Quran_Madinah.rar">Holy Quran Complete Pdf</a>
  <div class="clear"></div>
  http://quran.tv/Quran_Madinah.rar
  </div>
  </div>

    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="http://quran.tv/Quran3D.rar">Holy Quran Complete 3D View</a>
  <div class="clear"></div>
  http://quran.tv/Quran3D.rar
  </div>
  </div>


    <div class="qoraa">
  <div class="moshaf-bg">
  <a href="#">Working on others ....</a>
  <div class="clear"></div>
  Please Do update and share Plugin.Jazak ALLAH
  </div>
  </div>

</div>
</div>

<?php
	echo "</div>";
}


/////////////// 1
function islamicDB_sc_quran_qari_roqya($params = array()) {
	// default parameters
	extract(shortcode_atts(array(
		'width' => '340',
		'height' => '343'
	), $params));


	return '<iframe align="center" id="IW_frame_1438" src="http://quran.tv/qraa/player/roqya"  frameborder="0" allowtransparency="1" scrolling="no" width="'.$width.'" height="'.$height.'" ></iframe>';
}
add_shortcode('islamicDB-roqya', 'islamicDB_sc_quran_qari_roqya');

//////////////////// 2

function islamicDB_sc_quran_qari_english($params = array()) {
	// default parameters
	extract(shortcode_atts(array(
		'width' => '340',
		'height' => '343'
	), $params));


	return '<iframe align="center" id="IW_frame_1438" src="http://quran.tv/qraa/player/english"  frameborder="0" allowtransparency="1" scrolling="no" width="'.$width.'" height="'.$height.'" ></iframe>';
}
add_shortcode('islamicDB-english', 'islamicDB_sc_quran_qari_english');

	
////////////////////// 3

function islamicDB_sc_quran_qari_abdulbasetm($params = array()) {
	// default parameters
	extract(shortcode_atts(array(
		'width' => '340',
		'height' => '343'
	), $params));


	return '<iframe align="center" id="IW_frame_1438" src="http://quran.tv/qraa/player/abdulbasetm"  frameborder="0" allowtransparency="1" scrolling="no" width="'.$width.'" height="'.$height.'" ></iframe>';
}
add_shortcode('islamicDB-abdulbasetm', 'islamicDB_sc_quran_qari_abdulbasetm');

////////////////////// 4

function islamicDB_sc_quran_qari_althobaiti($params = array()) {
	// default parameters
	extract(shortcode_atts(array(
		'width' => '340',
		'height' => '343'
	), $params));


	return '<iframe align="center" id="IW_frame_1438" src="http://quran.tv/qraa/player/althobaiti"  frameborder="0" allowtransparency="1" scrolling="no" width="'.$width.'" height="'.$height.'" ></iframe>';
}
add_shortcode('islamicDB-althobaiti', 'islamicDB_sc_quran_qari_althobaiti');

		
	?>
