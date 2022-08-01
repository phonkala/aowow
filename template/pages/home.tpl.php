<!DOCTYPE html>
<html>
<head>
<?php $this->brick('head'); ?>

</head>
<body class="home<?=(User::isPremium() ? ' premium-logo' : null); ?>">
    <div id="layers"></div>
<?php
if ($this->homeTitle):
    echo "    <script>document.title = '".$this->homeTitle."';</script>\n";
endif;

if (!empty($this->featuredBox['altHomeLogo'])):
?>
    <style type="text/css">
    .home-logo {
           background: url(<?=$this->featuredBox['altHomeLogo'];?>) no-repeat center 0 !important;
           margin-bottom: 1px !important;
    }
    </style>
<?php endif; ?>
    <div class="home-wrapper">
        <h1>Aowow</h1>
        <div class="home-logo" id="home-logo"></div>

<?php $this->brick('announcement'); ?>

        <div class="home-search" id="home-search">
            <form method="get">
                <input type="text" name="search" />
            </form>
        </div>

        <div class="home-menu" id="home-menu"></div>

<?php if ($this->oneliner): ?>
<p class="home-oneliner text" id="home-oneliner"></p>

<script type="text/javascript">//<![CDATA[
Markup.printHtml('<?=$this->oneliner;?>', 'home-oneliner');
//]]></script>
<?php elseif ($this->featuredBox): ?>
       <div class="pad"></div>
<?php
endif;
if ($this->featuredBox):
?>
        <div class="home-featuredbox<?=(empty($this->featuredBox['extraWide']) ? null : ' home-featuredbox-extended'); ?>" style="background-image: url(<?=$this->featuredBox['boxBG']; ?>);" id="home-featuredbox">
<?php if ($this->featuredBox['overlays']): ?>
            <div class="home-featuredbox-links">
<?php
        foreach ($this->featuredBox['overlays'] as $o):
                echo '                <a href="'.$o['url'].'" title="'.$o['title'].'" style="left: '.$o['left'].'px; top: 18px; width:'.$o['width'].'px; height: 160px"></a>'."\n";
                echo '                <var style="left: '.$o['left'].'px; top: 18px; width:'.$o['width'].'px; height: 160px"></var>'."\n";
        endforeach;
?>
            </div>
<?php endif; ?>
            <div class="home-featuredbox-inner text" id="news-generic"></div>
        </div>

<?php
endif;
?>

<!-- Custom: Quick links to class/spec specific best-in-slot (BiS) lists. //-->
<div class="custom-quicklinks" style="clear: both; margin: 40px auto; overflow: auto; position: relative; text-align: left; width: 530px;">
    
    <h2>Quick links to class/spec specific best-in-slot (BiS) lists.</h2>
    
    <div class="custom-quicklinks-inner" style="float: left; width: 265px;">
        
        <h3>Death Knight</h3>
        <ul>
        <li><a href="?items&filter=wt=134:114:20:119:117:96:103:77:41;wtv=360:100:99:91:90:57:55:36:1;gm=3;gb=1;ub=6">Blood (DPS)</a></li>
        <li><a href="?items&filter=wt=134:119:20:117:114:96:77:103:41;wtv=337:100:97:81:61:45:35:28:1;gm=3;gb=1;ub=6">Frost (DPS)</a></li>
        <li><a href="?items&filter=wt=134:46:119:20:42:117:45:21:22:96:77:114:41;wtv=419:100:97:96:85:69:61:61:61:49:41:31:5;gm=3;gb=1;ub=6">Frost (Tank)</a></li>
        <li><a href="?items&filter=wt=134:20:119:117:103:96:77:114:41;wtv=209:100:66:51:48:45:34:32:1;gm=3;gb=1;ub=6">Unholy (DPS)</a></li>
        </ul>
        
        <h3>Druid</h3>
        <ul>
        <li><a href="?items&filter=wt=119:123:103:96:24:23;wtv=100:66:54:43:22:22;gm=3;gb=1;ub=11">Balance (DPS)</a></li>
        <li><a href="?items&filter=wt=21:22:45:42:117:20:41:119:103:77:97:96;wtv=100:75:65:60:16:10:10:8:5:4:4:3;gm=3;gb=1;ub=11">Feral (Tank)</a></li>
        <li><a href="?items&filter=wt=123:61:103:23:24:96;wtv=100:73:57:51:32:11;gm=3;gb=1;ub=11">Restoration (Healing)</a></li>
        <li><a href="?items&filter=wt=123:61:103:23:24:96;wtv=100:73:57:51:32:11;gm=3;gb=1;ub=11">Feral (DPS)</a></li>
        </ul>
        
        <h3>Hunter</h3>
        <ul>
        <li><a href="?items&filter=wt=138:119:21:96:23:77:114:103;wtv=213:100:58:40:37:30:28:21;gm=3;gb=1;ub=3">Beast Mastery</a></li>
        <li><a href="?items&filter=wt=138:119:21:96:114:23:77:103;wtv=379:100:74:57:40:39:32:24;gm=3;gb=1;ub=3">Marksmanship</a></li>
        <li><a href="?items&filter=wt=138:119:21:96:23:103:77:114;wtv=181:100:76:42:35:31:29:26;gm=3;gb=1;ub=3">Survival</a></li>
        </ul>
        
        <h3>Mage</h3>
        <ul>
        <li><a href="?items&filter=wt=119:103:52:123:96:23:54:53:24;wtv=100:54:49:49:37:34:24:24:14;gm=3;gb=1;ub=8">Arcane</a></li>
        <li><a href="?items&filter=wt=119:103:53:123:96:54:52:23;wtv=100:53:46:46:43:23:23:13;gm=3;gb=1;ub=8">Fire</a></li>
        <li><a href="?items&filter=wt=119:103:54:123:52:53:96:23;wtv=100:42:39:39:19:19:19:6;gm=3;gb=1;ub=8">Frost</a></li>
        </ul>
        
        <h3>Paladin</h3>
        <ul>
        <li><a href="?items&filter=wt=23:61:123:96:103;wtv=100:88:58:46:35;gm=3;gb=1;ub=2">Holy (Healing)</a></li>
        <li><a href="?items&filter=wt=22:45:43:42:117:21:46:119:44:20:41:77:123:96;wtv=100:94:86:86:79:76:76:58:52:50:6:6:4:3;gm=3;gb=1;ub=2">Protection (Tank)</a></li>
        <li><a href="?items&filter=wt=134:119:20:117:96:77:21:103:114:123;wtv=470:100:80:66:40:34:32:30:22:9;gm=3;gb=1;ub=2">Retribution (DPS)</a></li>
        </ul>
        
    </div>
    <div class="custom-quicklinks-inner" style="float: left; width: 265px;">
        
        <h3>Priest</h3>
        <ul>
        <li><a href="?items&filter=wt=123:61:23:103:96:24;wtv=100:67:65:59:48:22;gm=3;gb=1;ub=5">Discipline (Healing)</a></li>
        <li><a href="?items&filter=wt=61:23:123:24:96:103;wtv=100:69:60:52:38:31;gm=3;gb=1;ub=5">Holy (Healing)</a></li>
        <li><a href="?items&filter=wt=119:57:123:96:103:24:23;wtv=100:76:76:54:50:16:16;gm=3;gb=1;ub=5">Shadow (DPS)</a></li>
        </ul>
        
        <h3>Rogue</h3>
        <ul>
        <li><a href="?items&filter=wt=134:21:117:119:96:77:114:103:20;wtv=170:100:87:83:81:65:65:64:55;gm=3;gb=1;ub=4">Assassination</a></li>
        <li><a href="?items&filter=wt=134:114:21:117:119:96:103:20:77;wtv=220:100:100:82:80:75:73:55:50;gm=3;gb=1;ub=4">Combat</a></li>
        <li><a href="?items&filter=wt=134:117:21:119:114:96:103:20:77;wtv=228:100:100:80:75:75:75:55:50;gm=3;gb=1;ub=4">Subtlety</a></li>
        </ul>
        
        <h3>Shaman</h3>
        <ul>
        <li><a href="?items&filter=wt=119:123:103:96:23;wtv=100:60:56:40:11;gm=3;gb=1;ub=7">Elemental (DPS)</a></li>
        <li><a href="?items&filter=wt=134:119:117:21:23:96:103:20:77:123:114;wtv=135:100:84:55:55:55:42:35:32:29:26;gm=3;gb=1;ub=7">Enhancement (DPS)</a></li>
        <li><a href="?items&filter=wt=61:23:123:96:103;wtv=100:85:77:62:35;gm=3;gb=1;ub=7">Restoration (Healing)</a></li>
        </ul>
        
        <h3>Warlock</h3>
        <ul>
        <li><a href="?items&filter=wt=119:57:123:103:96:53:24:23;wtv=100:72:72:61:38:36:34:15;gm=3;gb=1;ub=9">Affliction</a></li>
        <li><a href="?items&filter=wt=119:103:53:57:123:96:24:23;wtv=100:50:45:45:45:31:29:13;gm=3;gb=1;ub=9">Demonology</a></li>
        <li><a href="?items&filter=wt=119:103:53:57:123:96:24:23;wtv=100:50:45:45:45:31:29:13;gm=3;gb=1;ub=9">Destruction</a></li>
        </ul>
        
        <h3>Warrior</h3>
        <ul>
        <li><a href="?items&filter=wt=117:20:96:21:114:119:103:77:41;wtv=100:82:66:53:52:48:36:31:5;gm=3;gb=1;ub=1">Fury</a></li>
        <li><a href="?items&filter=wt=22:45:42:43:21:46:44:20:117:119:114:96:41:103:77;wtv=100:90:86:81:67:67:48:48:19:10:10:7:6:1:1;gm=3;gb=1;ub=1">Protection (Tank)</a></li>
        </ul>
        
    </div>
    
</div>
<!-- END Custom: Quick links to class/spec specific best-in-slot (BiS) lists. //-->

        <script type="text/javascript">//<![CDATA[
<?php
if (User::$localeId):
    echo "            Locale.set(".User::$localeId.");\n";
endif;
echo $this->writeGlobalVars();

if ($this->featuredBox):
    echo "            Markup.printHtml(".Util::toJSON($this->featuredBox['text']).", 'news-generic', { allow: Markup.CLASS_ADMIN });\n";
endif;
?>
        //]]></script>
    </div>

    <div class="toplinks linklist"><?php $this->brick('headerMenu'); ?></div>

    <div class="footer">
        <div class="footer-links linklist">
            <a href="?aboutus"><?=Lang::main('aboutUs'); ?></a>|<a href="https://github.com/Sarjuuk/aowow" target="_blank">Github</a>|<a href="#" id="footer-links-language"><?=Lang::main('language'); ?></a>
        </div>
        <div class="footer-copy">
            &#12484; 2022 Aowow<br />rev. <?=AOWOW_REVISION; ?>
        </div>
    </div>

<?php $this->brick('pageTemplate'); ?>

    <noscript><div id="noscript-bg"></div><div id="noscript-text"><b><?=Lang::main('jsError'); ?></b></div></noscript>
</body>
</html>
