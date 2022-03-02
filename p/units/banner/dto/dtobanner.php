<?php 
	include $_SERVER['DOCUMENT_ROOT'] . '/q/q/ip/SxGeo22_API/cgeoip.php';
	CGeoIp::getInfo($city, $country);
	$country = strtoupper($country);
 ?>
<?php if ('RU' === $country): ?>
	<?php /*include $_SERVER['DOCUMENT_ROOT'] . '/p/units/osago/tpl/o/banner.php'; */?>
	<div style="border:1px solid red;max-width:800px;margin:0 auto; color:white; background-color: #290f4d;">
		<div>
			<a href="https://andryuxa.ru/portfolio/desktop/generator_koda_dlya_dto_klassov/" style="margin-left:14px; font-weight:bold;color:green; text-decoration:none;"><span style="line-height:25px;vertical-align:middle;display:inline-block;margin-right:8px;">
				<div>
					<div style="height:176px; width:234px; display:inline-block;">
						<img alt="DTO" src="https://andryuxa.ru/i/DTO2-rls.jpg" style="height:176px; vertical-align:middle;">
					</div>
					<div style="display:inline-block;">
						<div style="font-size: 48px;margin-left: 132px;vertical-align: top;line-height: 73px;">
							<span style="color:white">DTO</span>
							<span style="color:white">PHP</span>
						</div>
						<span style="color: #366c2a;font-size: 55px;line-height: 85px;vertical-align: bottom;margin-left: 75px;display: inline-block;height: 24px;">Code Generator</span>
					</div>
					
					
				</div>
				
			</a>
		</div>
	</div>
<?php else :?>
<div style="border:1px solid red;max-width:800px;margin:0 auto; color:white; background-color: #290f4d;">
	<div>
		<a href="https://andryuxa.ru/blog/dto_code_generator_for_php/" style="margin-left:14px; font-weight:bold;color:green; text-decoration:none;"><span style="line-height:25px;vertical-align:middle;display:inline-block;margin-right:8px;">
			<div>
				<div style="height:176px; width:234px; display:inline-block;">
					<img alt="DTO" src="https://andryuxa.ru/i/DTO2-rls.jpg" style="height:176px; vertical-align:middle;">
				</div>
				<div style="display:inline-block;">
					<div style="font-size: 48px;margin-left: 132px;vertical-align: top;line-height: 73px;">
						<span style="color:white">DTO</span>
						<span style="color:white">PHP</span>
					</div>
					<span style="color: #366c2a;font-size: 55px;line-height: 85px;vertical-align: bottom;margin-left: 75px;display: inline-block;height: 24px;">Code Generator</span>
				</div>
				
				
			</div>
			
		</a>
	</div>
</div>
<?php endif ?>
