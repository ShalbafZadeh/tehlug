<div class="title">
	صفحه اصلی
</div>

<div class="dialog" style="float: right;">
	<div class="green box">
تهران‌لاگ چیست؟
	</div>

گروه کاربران گنو/لینوکس تهران یا «تهران‌لاگ» گروهی <b>مستقل</b> از کاربران کامپیوتر علاقه‌مند به <a href="http://www.gnu.org/gnu/linux-and-gnu.fa.html">گنو/لینوکس</a> ساکن تهران است. تم محوری جلسات تهران‌لاگ عبارت است از نرم افزار آزاد به صورت عمومی. با این حال، فعالیت‌های متفاوتی از جمله معرفی توزیع‌های آزاد گنو/لینوکسی، معرفی انواع سیستم‌عامل‌های آزاد خانواده‌ی بی‌اس‌دی، نصب آنها، محتوای آموزشی و حتی بحث آزاد در حوزه‌ی تئوریک نرم افزار آزاد نیز به طور همزمان در این اجتماع دنبال میشوند. در واقع تهران‌لاگ یک اجتماع از کاربران نرم افزار آزاد است که مایلند دقایقی را در کنار هم سپری کنند.
<br />
شرکت در جلسات این گروه برای <b>عموم</b> آزاد است.
شما نیز چنانچه علاقه‌مند هستید میتوانید در جلسات آن شرکت کنید و دانش خود را با سایر اعضا به اشتراک گذاشته و یا از دانش آنان استفاده کنید.

<b> برای اطلاعات بیشتر میتوانید عضو <a href="http://lists.tehlug.org/mailman/listinfo/general">لیست پستی</a> گروه شوید.</b>
</div>


<div class="dialog" style="float: left;">
	<div class="orange box">
		تابلوی اخبار و جلسات

		<a href="rss.php">
			<img src="images/rss.png" alt="RSS Feed" title="RSS Feed" style="float: left;" />
		</a>
	</div>

	<ul class="entries">
		<?php
		$next = getNextSession();

		foreach(getEntries(Null, 6) as $entry) {
			echo '<li class="entry">';

			if($entry == $next)
				echo 'جلسه بعدی:';

			echo '<a href="'.$entry->url.'">';

			echo $entry->title;

			echo '</a>';

			if($entry->date)
				echo "<div class='date'>".toPersian($entry->date)."</div>";

			echo '</li>';
		}
		?>
	</ul>
</div>

<div class="clear"></div>

<div class="dialog center" style="float: right;">
	<div class="blue box" style="color: white;">
			محل برگزاری جلسه ۲۱۹
	</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3237.6691861981526!2d51.400563399999996!3d35.758935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfd6f8c0337ff5a92!2z2YXZiNiz2LPZhyDYotmF2YjYsti0INi52KfZhNuMINiu2KfYqtmF!5e0!3m2!1sen!2sus!4v1438550347190" width="546" height="295" frameborder="0" style="border:0;width: 100%;height: 100%;" allowfullscreen></iframe>
<br />
<b> جشن از ساعت ۹ الی ۱۳‫:‬۳۰ روز پنج شنبه ۱۵ مرداد برگزار می‌شود‫.‬ </b>
<br />
<a href="https://goo.gl/PxL4Hr" target="_blank">
<b>آدرس محل برگزاری جلسه جشن: خیابان ملاصدرا- خ شیراز شمالی - خ حکیم اعظم - پلاک ۳۰ - موسسه آموزش عالی خاتم </b>
</a>
<br />
</div>

<div class="dialog" style="float: left;">
	<div class="yellow box">
			جشن ده سالگی لاگ
	</div>

<div>
	<a href="images/tehlug200big.jpg"><img src="images/tehlug200-small.jpg" style="margin: 0 auto; display: block;"></a>
	</div>
</div>
