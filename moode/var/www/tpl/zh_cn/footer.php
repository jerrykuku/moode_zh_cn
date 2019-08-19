<!--
/**
 * moOde audio player (C) 2014 Tim Curtis
 * http://moodeaudio.org
 *
 * tsunamp player ui (C) 2013 Andrea Coiutti & Simone De Gregori
 * http://www.tsunamp.com
 *
 * This Program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3, or (at your option)
 * any later version.
 *
 * This Program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * 2019-08-08 TC moOde 6.0.0
 *
 */
-->
<!-- ABOUT -->
<div id="about-modal" class="modal modal-sm hide fade" tabindex="-1" role="dialog" aria-labelledby="about-modal-label" aria-hidden="true">
	<div class="modal-body">
		<button aria-label="Close" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<p style="text-align:center;font-size:40px;font-weight:500;letter-spacing:-2px;margin-top:2px">m<span style="color:#d35400;line-height:12px">oO</span>de<span style="font-size:12px;position:relative;top:-15px;left:-3px;">™</span></p>
			<p>Moode Audio Player is a derivative of the wonderful WebUI audio player client for MPD originally designed and coded by Andrea Coiutti and Simone De Gregori, and subsequently enhanced by early efforts from the RaspyFi/Volumio projects.</p>
			<h4>版本信息</h4>
			<ul>
				<li>版本: 6.0.0 2019-08-08 <a class="moode-about-link1" href="./relnotes.txt" target="_blank">查看版本说明</a></li>
				<li>安装向导: <a class="moode-about-link1" href="./setup.txt" target="_blank">查看向导</a></li>
				<li>Coding:	Tim Curtis &copy; 2014 <a class="moode-about-link1" href="http://moodeaudio.org" target="_blank">Moode Audio</a>, <a class="moode-about-link1" href="https://twitter.com/MoodeAudio" target="_blank">Twitter</a></li>
				<li>Contributors: <a class="moode-about-link1" href="./CONTRIBS.html" target="_blank">View contributors</a></li>
				<li>License: <a class="moode-about-link1" href="./COPYING.html" target="_blank">View GPLv3</a></li>
			</ul>
		</p>
		<p>
			<h4>平台信息</h4>
			<ul>
				<li>Raspbian 版本: <span id="sys-raspbian-ver"></span></li>
				<li>Linux 内核版本: <span id="sys-kernel-ver"></span>, <span id="sys-processor-arch"></span></li>
				<li>硬件: <span id="sys-hardware-rev"></span></li>
				<li>MPD 版本: <span id="sys-mpd-ver"></span></li>
			</ul>
		</p>
	</div>
	<div class="modal-footer">
		<button aria-label="Close" class="btn singleton" data-dismiss="modal" aria-hidden="true">Close</button>
	</div>
</div>

<!-- CONFIGURE -->
<div id="configure-modal" class="modal modal-sm hide fade" tabindex="-1" role="dialog" aria-labelledby="configure-modal-label" aria-hidden="true">
	<div class="modal-header">
		<button aria-label="Close" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3 id="configure-modal-label">配置设置</h3>
	</div>
	<div class="modal-body">
		<div id="players">
			<ul>
				<li><a href="lib-config.php" class="btn btn-large"><i class="fas fa-database"></i><br>曲库</a></li>
				<li><a href="snd-config.php" class="btn btn-large"><i class="fas fa-volume-up"></i><br>音频</a></li>
				<li><a href="net-config.php" class="btn btn-large"><i class="fas fa-sitemap"></i><br>网络</a></li>
				<li><a href="sys-config.php" class="btn btn-large"><i class="fas fa-desktop-alt"></i><br>系统</a></li>
			</ul>
		</div>
	</div>

	<div class="modal-footer">
		<div class="moode-config-settings-div context-menu">
			<a href="mpd-config.php" class="moode-config-settings-link2">MPD</a>
			<a href="eqp-config.php" class="moode-config-settings-link2">EQ-P</a>
			<a href="eqg-config.php" class="moode-config-settings-link2">EQ-G</a>
			<!--
			<?php if ($_SESSION['feat_bitmask'] & $FEAT_AIRPLAY) { ?>
				<a href="apl-config.php" class="moode-config-settings-link2">AIR</a>
			<?php } ?>
			<?php if ($_SESSION['feat_bitmask'] & $FEAT_SPOTIFY) { ?>
				<a href="spo-config.php" class="moode-config-settings-link2">SPO</a>
			<?php } ?>
			<?php if ($_SESSION['feat_bitmask'] & $FEAT_SQUEEZELITE) { ?>
				<a href="sqe-config.php" class="moode-config-settings-link2">SQE</a>
			<?php } ?>
			<?php if ($_SESSION['feat_bitmask'] & $FEAT_UPMPDCLI) { ?>
				<a href="upp-config.php" class="moode-config-settings-link2">UPP</a>
			<?php } ?>
			-->
			<a href="#notarget" class="moode-config-settings-link2" data-cmd="setforclockradio-m">电台闹钟</a>
			<?php if ($_SESSION['feat_bitmask'] & $FEAT_SOURCESEL) { ?>
				<a href="sel-config.php" class="moode-config-settings-link2">源选择</a>
			<?php } ?>
		</div>
		<br>
		<button aria-label="Close" class="btn singleton" data-dismiss="modal" aria-hidden="true">关闭</button>
	</div>
</div>

<!-- CUSTOMIZE -->
<div id="customize-modal" class="modal modal-sm hide fade" tabindex="-1" role="dialog" aria-labelledby="customize-modal-label" aria-hidden="true">
	<div class="modal-header">
		<button aria-label="Close" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3 id="customize-modal-label">外观</h3>
	</div>
	<div class="modal-body" id="container-customize">
		<form class="form-horizontal" action="" method="">
			<h5>主题与背景</h5>
		    	<fieldset>
				<div class="control-group">
   	                <label class="control-label" for="theme-name">主题</label>
	                <div class="controls">
   						<div class="btn-group bootstrap-select select-medium">
							<button type="button" class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">
								<div id="theme-name" class="filter-option pull-left">
									<span></span> <!-- selection from dropdown gets placed here -->
								</div>&nbsp;
								<div class="caret"></div>
							</button>
							<div id="theme-name-menu" class="dropdown-menu open">
								<ul id="theme-name-list" class="dropdown-menu custom-select inner" role="menu"></ul>
							</div>
						</div>
						<a aria-label="Help" class="info-toggle" data-cmd="info-themecolor" href="#notarget"><i class="fas fa-info-circle"></i></a>
						<span id="info-themecolor" class="help-block hide">
							设定电台、文件夹、标签和专辑视图的文本颜色与背景颜色。<br>
	                    </span>
	                </div>

   	                <label class="control-label" for="accent-color">配色</label>
	                <div class="controls">
   						<div class="btn-group bootstrap-select select-medium">
							<button type="button" class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">
								<div id="accent-color" class="filter-option pull-left">
									<span></span> <!-- selection from dropdown gets placed here -->
								</div>&nbsp;
								<div class="caret"></div>
							</button>
							<div class="dropdown-menu open">
								<ul id="accent-color-list" class="dropdown-menu custom-select inner" role="menu"></ul>
							</div>
						</div>
						<a aria-label="Help" class="info-toggle" data-cmd="info-accentcolor" href="#notarget"><i class="fas fa-info-circle"></i></a>
						<span id="info-accentcolor" class="help-block hide">
							设定开关和其他激活元素的颜色。
	                    	<br>
	                    </span>
	                </div>

   	                <label class="control-label" for="alpha-blend">通道混合</label>
	                <div class="controls">
   						<div class="btn-group bootstrap-select bootstrap-select-mini">
							<button type="button" class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">
								<div id="alpha-blend" class="filter-option pull-left">
									<span></span> <!-- selection from dropdown gets placed here -->
								</div>&nbsp;
								<div class="caret"></div>
							</button>
							<div class="dropdown-menu open">
								<ul id="alpha-blend-list" class="dropdown-menu custom-select inner" role="menu"></ul>
							</div>
						</div>
						<a aria-label="Help" class="info-toggle" data-cmd="info-alphablend" href="#notarget"><i class="fas fa-info-circle"></i></a>
						<span id="info-alphablend" class="help-block hide">
							将背景颜色的不透明度从0.00(完全透明)设置为1.00(完全不透明).小于1.00的值允许封面和图像背景变得可见
	                    	<br>
	                    </span>
	                </div>

   	                <label class="control-label" for="adaptive-enabled">自适应颜色</label>
	                <div class="controls">
   						<div class="btn-group bootstrap-select bootstrap-select-mini">
							<button type="button" class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">
								<div id="adaptive-enabled" class="filter-option pull-left">
									<span></span> <!-- selection from dropdown gets placed here -->
								</div>&nbsp;
								<div class="caret"></div>
							</button>
							<div class="dropdown-menu open">
								<ul class="dropdown-menu custom-select inner" role="menu">
									<li class="modal-dropdown-text"><a href="#notarget" data-cmd="adaptive-enabled-yn"><span class="text">是</span></a></li>
									<li class="modal-dropdown-text"><a href="#notarget" data-cmd="adaptive-enabled-yn"><span class="text">否</span></a></li>
								</ul>
							</div>
						</div>
						<a aria-label="Help" class="info-toggle" data-cmd="info-adaptive" href="#notarget"><i class="fas fa-info-circle"></i></a>
						<span id="info-adaptive" class="help-block hide">
							根据专辑封面中的主色调设置“播放”面板的颜色主题.
	                    	<br>
	                    </span>
	                </div>

					<label class="control-label" for="choose-file">自定义背景</label>
					<div class="controls">
						<div style="display:inline-block;">
							<label for="import-bgimage" class="btn btn-primary btn-small" style="font-size: 12px; margin-top: 2px; color: #333;">选择</label>
							<input type="file" id="import-bgimage" accept="image/jpeg" style="display:none" onchange="importBgImage(this.files)">
							<br>
							<button id="remove-bgimage" class="btn btn-primary btn-small" style="font-size: 12px; margin-top: 2px; margin-bottom:.5em;color: #333;">删除</button>
						</div>
						<div id="current-bgimage" style="width:50px;display:inline-block;position:absolute;margin: 2px 0 0 5px;"></div>
						<a aria-label="Help" class="info-toggle" id="info-toggle-bgimage" data-cmd="info-bgimage" href="#notarget"><i class="fas fa-info-circle"></i></a>
						<div id="error-bgimage"></div>
						<div id="info-bgimage" class="help-block hide">
							自定义全屏背景图像。最大尺寸不超过1MB。
							<br>
						</div>
					</div>

   	                <label class="control-label" for="cover-backdrop-enabled">封面背景</label>
	                <div class="controls">
   						<div class="btn-group bootstrap-select bootstrap-select-mini">
							<button type="button" class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">
								<div id="cover-backdrop-enabled" class="filter-option pull-left">
									<span></span> <!-- selection from dropdown gets placed here -->
								</div>&nbsp;
								<div class="caret"></div>
							</button>
							<div class="dropdown-menu open">
								<ul class="dropdown-menu custom-select inner" role="menu">
									<li class="modal-dropdown-text"><a href="#notarget" data-cmd="cover-backdrop-enabled-yn"><span class="text">是</span></a></li>
									<li class="modal-dropdown-text"><a href="#notarget" data-cmd="cover-backdrop-enabled-yn"><span class="text">否</span></a></li>
								</ul>
							</div>
						</div>
						<a aria-label="Help" class="info-toggle" data-cmd="info-cover-backdrop" href="#notarget"><i class="fas fa-info-circle"></i></a>
						<span id="info-cover-backdrop" class="help-block hide">
							设定当前专辑封面为全屏背景。
	                    	<br>
	                    </span>
	                </div>

   	                <label class="control-label" for="cover-blur">封面模糊</label>
	                <div class="controls">
   						<div class="btn-group bootstrap-select bootstrap-select-mini">
							<button type="button" class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">
								<div id="cover-blur" class="filter-option pull-left">
									<span></span> <!-- selection from dropdown gets placed here -->
								</div>&nbsp;
								<div class="caret"></div>
							</button>
							<div class="dropdown-menu open">
								<ul id="cover-blur-list" class="dropdown-menu custom-select inner" role="menu"></ul>
							</div>
						</div>
						<a aria-label="Help" class="info-toggle" data-cmd="info-cover-blur" href="#notarget"><i class="fas fa-info-circle"></i></a>
						<span id="info-cover-blur" class="help-block hide">
							设定作为全屏背景封面的模糊值。
	                    	<br>
	                    </span>
	                </div>

   	                <label class="control-label" for="cover-scale">封面缩放</label>
	                <div class="controls">
   						<div class="btn-group bootstrap-select bootstrap-select-mini">
							<button type="button" class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">
								<div id="cover-scale" class="filter-option pull-left">
									<span></span> <!-- selection from dropdown gets placed here -->
								</div>&nbsp;
								<div class="caret"></div>
							</button>
							<div class="dropdown-menu open">
								<ul id="cover-scale-list" class="dropdown-menu custom-select inner" role="menu"></ul>
							</div>
						</div>
						<a aria-label="Help" class="info-toggle" data-cmd="info-cover-scale" href="#notarget"><i class="fas fa-info-circle"></i></a>
						<span id="info-cover-scale" class="help-block hide">
							放大封面背景的尺寸。
	                    	<br>
	                    </span>
	                </div>
				</div>
		    	</fieldset>

			<h5>封面模式选项</h5>
		    	<fieldset>
				<div class="control-group">
   	                <label class="control-label" for="scnsaver-timeout">自动显示</label>
	                <div class="controls">
   						<div class="btn-group bootstrap-select select-medium">
							<button type="button" class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">
								<div id="scnsaver-timeout" class="filter-option pull-left">
									<span></span> <!-- selection from dropdown gets placed here -->
								</div>&nbsp;
								<div class="caret"></div>
							</button>
							<div class="dropdown-menu open">
								<ul id="scnsaver-timeout-list" class="dropdown-menu custom-select inner" role="menu"></ul>
							</div>
						</div>
						<a aria-label="Help" class="info-toggle" data-cmd="info-scnsaver-timeout" href="#notarget"><i class="fas fa-info-circle"></i></a>
						<span id="info-scnsaver-timeout" class="help-block hide">
							在特定时间后自动显示一个带有专辑封面和歌曲信息全屏的界面
	                    	<br>
	                    </span>
	                </div>

   	                <label class="control-label" for="scnsaver-timeout">背景风格</label>
	                <div class="controls">
   						<div class="btn-group bootstrap-select select-medium">
							<button type="button" class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">
								<div id="scnsaver-style" class="filter-option pull-left">
									<span></span> <!-- selection from dropdown gets placed here -->
								</div>&nbsp;
								<div class="caret"></div>
							</button>
							<div class="dropdown-menu open">
								<ul id="scnsaver-style-list" class="dropdown-menu custom-select inner" role="menu"></ul>
							</div>
						</div>
						<a aria-label="Help" class="info-toggle" data-cmd="info-scnsaver-style" href="#notarget"><i class="fas fa-info-circle"></i></a>
						<span id="info-scnsaver-style" class="help-block hide">
							设定背景效果。
	                    	<br>
							<b>- Animated:</b> Cover backdrop with color change overlay<br>
							<b>- Gradient:</b> Cover backdrop with dark gradient overlay<br>
							<b>- Theme:</b> 与主题色相匹配的背景效果<br>
							<b>- Pure Black:</b> 纯黑背景<br>
	                    </span>
	                </div>
				</div>
		    	</fieldset>

			<h5>其它选项</h5>
		    	<fieldset>
				<div class="control-group">
	                <label class="control-label" for="ashuffle-filter">自动随机特效</label>
	                <div class="controls">
	                    <input id="ashuffle-filter" class="input-xlarge input-height-x" type="text">
						<a aria-label="Help" class="info-toggle" data-cmd="info-ashuffle-filter" href="#notarget"><i class="fas fa-info-circle"></i></a>
						<span id="info-ashuffle-filter" class="help-block hide">
							String of TAG VALUE pairs that Auto-shuffle uses to select the tracks being shuffled. Only one occurance of a given TAG is allowed. The filter is case insensitive and it performs a TAG contains VALUE substring match.<br>
							Example: genre "indie rock" artist coldplay<br>
						</span>
	                </div>

   	                <label class="control-label" for="extratag-display">显示扩展信息</label>
	                <div class="controls">
   						<div class="btn-group bootstrap-select bootstrap-select-mini">
							<button type="button" class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">
								<div id="extratag-display" class="filter-option pull-left">
									<span></span> <!-- selection from dropdown gets placed here -->
								</div>&nbsp;
								<div class="caret"></div>
							</button>
							<div class="dropdown-menu open">
								<ul class="dropdown-menu custom-select inner" role="menu">
									<li class="modal-dropdown-text"><a href="#notarget" data-cmd="extratag-display-yn"><span class="text">是</span></a></li>
									<li class="modal-dropdown-text"><a href="#notarget" data-cmd="extratag-display-yn"><span class="text">否</span></a></li>
								</ul>
							</div>
						</div>
						<a aria-label="Help" class="info-toggle" data-cmd="info-extratag-display" href="#notarget"><i class="fas fa-info-circle"></i></a>
						<span id="info-extratag-display" class="help-block hide">
								在播放面板的专辑封面下面显示额外的信息。
		                    	<br>
	                    </span>
	                </div>

   	                <label class="control-label" for="play-history-enabled">播放历史</label>
	                <div class="controls">
   						<div class="btn-group bootstrap-select bootstrap-select-mini">
							<button type="button" class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">
								<div id="play-history-enabled" class="filter-option pull-left">
									<span></span> <!-- selection from dropdown gets placed here -->
								</div>&nbsp;
								<div class="caret"></div>
							</button>
							<div class="dropdown-menu open">
								<ul class="dropdown-menu custom-select inner" role="menu">
									<li class="modal-dropdown-text"><a href="#notarget" data-cmd="play-history-enabled-yn"><span class="text">是</span></a></li>
									<li class="modal-dropdown-text"><a href="#notarget" data-cmd="play-history-enabled-yn"><span class="text">否</span></a></li>
								</ul>
							</div>
						</div>
						<a aria-label="Help" class="info-toggle" data-cmd="info-play-history" href="#notarget"><i class="fas fa-info-circle"></i></a>
						<span id="info-play-history" class="help-block hide">
	                    	将歌曲播放历史记录到日志中.可以单击日志中的歌曲以启动Google搜索.可以从系统配置中清除日志.<br>
	                    </span>
	                </div>
				</div>
		    	</fieldset>
		</form>
	</div>

	<div class="modal-footer">
		<button aria-label="Cancel" class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
		<button aria-label="Update" class="btn btn-appearance-update btn-primary" data-dismiss="modal">更新</button>
	</div>
</div>

<!-- CLOCK RADIO -->
<div id="clockradio-modal" class="modal modal-sm hide fade" tabindex="-1" role="dialog" aria-labelledby="clockradio-modal-label" aria-hidden="true">
	<div class="modal-header">
		<button aria-label="Close" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3 id="clockradio-modal-label">电台闹钟设定</h3>
	</div>
	<div class="modal-body" id="container-clockradio">
		<form class="form-horizontal" action="" method="">
		    	<fieldset>
				<div class="control-group">
	                <label class="control-label" for="clockradio-mode">模式</label>
	                <div class="controls">
						<div class="btn-group bootstrap-select" style="width: 120px;">
							<button type="button" class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">
								<div id="clockradio-mode" class="filter-option pull-left">
									<span></span> <!-- selection from dropdown gets placed here -->
								</div>&nbsp;
								<div class="caret"></div>
							</button>
							<div class="dropdown-menu open">
								<ul class="dropdown-menu custom-select inner" role="menu">
									<li class="modal-dropdown-text"><a href="#notarget" data-cmd="clockradio-mode-sel"><span class="text">禁用</span></a></li>
									<li class="modal-dropdown-text"><a href="#notarget" data-cmd="clockradio-mode-sel"><span class="text">电台闹钟</span></a></li>
									<li class="modal-dropdown-text"><a href="#notarget" data-cmd="clockradio-mode-sel"><span class="text">睡眠定时</span></a></li>
								</ul>
							</div>
						</div>
	                </div>

					<div id="clockradio-ctl-grp1">
		                <label class="control-label" for="clockradio-playname">播放</label>
		                <div class="controls">
		                    <input id="clockradio-playname" class="input-xlarge input-height-x" type="text" name="clockradio_playname" value="" readonly>
							<a aria-label="Help" class="info-toggle" data-cmd="info-playname" href="#notarget"><i class="fas fa-info-circle"></i></a>
							<span id="info-playname" class="help-block hide">
			                    Use 'Set for clock radio' on the Playlist item menu to populate this read-only field.
		                    </span>
		                </div>

		                <label class="control-label" for="clockradio-starttime-hh">开始时间</label>
		                <div class="controls">
		                    <input id="clockradio-starttime-hh" class="input-mini input-height-x" type="number" maxlength="2" min="1" max="12" name="clockradio_starttime-hh" value="">
		                    <span>:</span>
		                    <input id="clockradio-starttime-mm" class="input-mini input-height-x" type="number" maxlength="2" min="0" max="59" name="clockradio_starttime-mm" value="">

							<div class="btn-group bootstrap-select bootstrap-select-mini">
								<button type="button" class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">
									<div id="clockradio-starttime-ampm" class="filter-option pull-left">
										<span></span> <!-- selection from dropdown gets placed here -->
									</div>&nbsp;
									<div class="caret"></div>
								</button>
								<div class="dropdown-menu open">
									<ul class="dropdown-menu custom-select inner" role="menu">
										<li class="modal-dropdown-text"><a href="#notarget" data-cmd="clockradio-starttime-ampm"><span class="text">上午</span></a></li>
										<li class="modal-dropdown-text"><a href="#notarget" data-cmd="clockradio-starttime-ampm"><span class="text">下午</span></a></li>
									</ul>
								</div>
							</div>
		                </div>

						<!-- r44d -->
		                <label class="control-label" for="clockradio-start-mon"></label>
		                <div class="controls">
							<div class="checkbox-grp">
								<input id="clockradio-start-mon" class="checkbox-ctl" type="checkbox" name="clockradio-start-mon">Mon
								<input id="clockradio-start-tue" class="checkbox-ctl" type="checkbox" name="clockradio-start-tue">Tue
								<input id="clockradio-start-wed" class="checkbox-ctl" type="checkbox" name="clockradio-start-wed">Wed
								<input id="clockradio-start-thu" class="checkbox-ctl" type="checkbox" name="clockradio-start-thu">Thu
								<input id="clockradio-start-fri" class="checkbox-ctl" type="checkbox" name="clockradio-start-fri">Fri
								<span>&nbsp;&nbsp;&nbsp;</span>
								<input id="clockradio-start-sat" class="checkbox-ctl" type="checkbox" name="clockradio-start-sat">Sat
								<input id="clockradio-start-sun" class="checkbox-ctl" type="checkbox" name="clockradio-start-sun">Sun
							</div>
		                </div>
					</div>

					<div id="clockradio-ctl-grp2">
		                <label class="control-label" for="clockradio-stoptime-hh">停止时间</label>
		                <div class="controls">
		                    <input id="clockradio-stoptime-hh" class="input-mini input-height-x" type="number" maxlength="2" min="1" max="12" name="clockradio_stoptime-hh" value="">
		                    <span>:</span>
		                    <input id="clockradio-stoptime-mm" class="input-mini input-height-x" type="number" maxlength="2" min="0" max="59" name="clockradio_stoptime-mm" value="">

							<div class="btn-group bootstrap-select bootstrap-select-mini">
								<button type="button" class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">
									<div id="clockradio-stoptime-ampm" class="filter-option pull-left">
										<span></span> <!-- selection from dropdown gets placed here -->
									</div>&nbsp;
									<div class="caret"></div>
								</button>
								<div class="dropdown-menu open">
									<ul class="dropdown-menu custom-select inner" role="menu">
										<li class="modal-dropdown-text"><a href="#notarget" data-cmd="clockradio-stoptime-ampm"><span class="text">AM</span></a></li>
										<li class="modal-dropdown-text"><a href="#notarget" data-cmd="clockradio-stoptime-ampm"><span class="text">PM</span></a></li>
									</ul>
								</div>
							</div>
		                </div>

						<!-- r44d -->
		                <label class="control-label" for="clockradio-stop-mon"></label>
		                <div class="controls">
							<div class="checkbox-grp">
								<input id="clockradio-stop-mon" class="checkbox-ctl" type="checkbox" name="clockradio-stop-mon">Mon
								<input id="clockradio-stop-tue" class="checkbox-ctl" type="checkbox" name="clockradio-stop-tue">Tue
								<input id="clockradio-stop-wed" class="checkbox-ctl" type="checkbox" name="clockradio-stop-wed">Wed
								<input id="clockradio-stop-thu" class="checkbox-ctl" type="checkbox" name="clockradio-stop-thu">Thu
								<input id="clockradio-stop-fri" class="checkbox-ctl" type="checkbox" name="clockradio-stop-fri">Fri
								<span>&nbsp;&nbsp;&nbsp;</span>
								<input id="clockradio-stop-sat" class="checkbox-ctl" type="checkbox" name="clockradio-stop-sat">Sat
								<input id="clockradio-stop-sun" class="checkbox-ctl" type="checkbox" name="clockradio-stop-sun">Sun
							</div>
		                </div>

		                <label class="control-label" for="clockradio-action">动作</label>
		                <div class="controls">
	   						<div class="btn-group bootstrap-select" style="width: 120px;">
								<button type="button" class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">
									<div id="clockradio-action" class="filter-option pull-left">
										<span></span> <!-- selection from dropdown gets placed here -->
									</div>&nbsp;
									<div class="caret"></div>
								</button>
								<div class="dropdown-menu open">
									<ul class="dropdown-menu custom-select inner" role="menu">
										<li class="modal-dropdown-text"><a href="#notarget" data-cmd="clockradio-action-sel"><span class="text">无</span></a></li>
										<li class="modal-dropdown-text"><a href="#notarget" data-cmd="clockradio-action-sel"><span class="text">重启</span></a></li>
										<li class="modal-dropdown-text"><a href="#notarget" data-cmd="clockradio-action-sel"><span class="text">关机</span></a></li>
									</ul>
								</div>
							</div>
							<span class="control-aftertext">停止后
							<a aria-label="Help" class="info-toggle" data-cmd="info-action" href="#notarget"><i class="fas fa-info-circle"></i></a></span>
							<span id="info-action" class="help-block hide">
								NOTE: The Reboot action is initiated 45 seconds after the specified stop time.
							</span>
		                </div>
					</div>

					<div id="clockradio-ctl-grp3">
		                <label class="control-label" for="clockradio-volume">音量</label>
		                <div class="controls">
		                    <input id="clockradio-volume" class="input-mini input-height-x" type="number" min="1" max="100" name="clockradio_volume" value="">
		                </div>
					</div>

	            </div>
		    	</fieldset>
		</form>
	</div>
	<div class="modal-footer">
		<button aria-label="Cancel" class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
		<button aria-label="Update" class="btn btn-clockradio-update btn-primary" data-dismiss="modal">更新</button>
	</div>
</div>

<!-- PLAYERS -->
<div id="players-modal" class="modal modal-sm hide fade" tabindex="-1" role="dialog" aria-labelledby="players-modal-label" aria-hidden="true">
	<div class="modal-header">
		<button aria-label="Close" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3 id="players-modal-label">播放器</h3>
	</div>
	<div class="modal-body">
	</div>
	<div class="modal-footer">
		<button aria-label="Close" class="btn singleton" data-dismiss="modal" aria-hidden="true">关闭</button>
	</div>
</div>

<!-- AUDIO INFO -->
<div id="audioinfo-modal" class="modal modal-sm hide fade" tabindex="-1" role="dialog" aria-labelledby="audioinfo-modal-label" aria-hidden="true">
	<div class="modal-header">
		<button aria-label="Close" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3 id="audioinfo-modal-label">音频信息</h3>
	</div>
	<div class="modal-body">
	</div>
	<div class="modal-footer">
		<button aria-label="Close" class="btn singleton" data-dismiss="modal" aria-hidden="true">关闭</button>
	</div>
</div>

<!-- SYSTEM INFO -->
<div id="sysinfo-modal" class="modal modal-sm hide fade" tabindex="-1" role="dialog" aria-labelledby="sysinfo-modal-label" aria-hidden="true">
	<div class="modal-header">
		<button aria-label="Close" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3 id="sysinfo-modal-label">系统信息</h3>
	</div>
	<div class="modal-body">
	</div>
	<div class="modal-footer">
		<button aria-label="Close" class="btn singleton" data-dismiss="modal" aria-hidden="true">关闭</button>
	</div>
</div>

<!-- QUICK HELP -->
<div id="quickhelp-modal" class="modal modal-sm hide fade" tabindex="-1" role="dialog" aria-labelledby="help-modal-label" aria-hidden="true">
	<div class="modal-header">
		<button aria-label="Close" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3 id="help-modal-label">快速帮助</h3>
	</div>
	<div class="modal-body">
		<div id="quickhelp"></div>
	</div>
	<div class="modal-footer">
		<button aria-label="Close" class="btn singleton" data-dismiss="modal" aria-hidden="true">关闭</button>
	</div>
</div>

<!-- RESTART -->
<div id="restart-modal" class="modal modal-sm2 hide fade" tabindex="-1" role="dialog" aria-labelledby="restart-modal-label" aria-hidden="true">
	<div class="modal-header">
		<button aria-label="Close" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3 id="restart-modal-label"><i class="fas fa-power-off sx"></i></h3>
	</div>
	<div class="modal-body">
		<button aria-label="Shutdown" id="syscmd-poweroff" data-dismiss="modal" class="btn btn-primary btn-large btn-block"></i>关机</button>
		<button aria-label="Reboot" id="syscmd-reboot" data-dismiss="modal" class="btn btn-primary btn-large btn-block" style="margin-bottom:15px;"></i>重启</button>
	</div>
	<div class="modal-footer">
		<button aria-label="Cancel" class="btn singleton" data-dismiss="modal" aria-hidden="true">取消</button>
	</div>
</div>

<!-- RECONNECT/REBOOT/POWEROFF -->
<div id="reconnect" class="hide">
	<div class="reconnectbg"></div>
	<div class="reconnectbtn">
		<a href="javascript:location.reload(true); void 0" class="btn btn-primary btn-large">重新连接</a>
	</div>
</div>

<div id="reboot" class="hide">
	<div class="reconnectbg"></div>
	<div class="reconnectbtn">
		<a href="javascript:location.reload(true); void 0" class="btn btn-primary btn-large">重新连接</a>
		<br>系统重启中
	</div>
</div>

<div id="poweroff" class="hide">
	<div class="reconnectbg"></div>
	<div class="reconnectbtn">
		<a href="javascript:location.reload(true); void 0" class="btn btn-primary btn-large">重新连接</a>
		<br>系统关机
	</div>
</div>

<!-- DISPLAY MESSAGES -->
<script src="js/jquery-1.8.2.min.js"></script>
<script src="js/jquery-ui-1.10.0.custom.min.js"></script>

<?php
    if (isset($_SESSION['notify']['title']) && $_SESSION['notify']['title'] != '') {
        ui_notify($_SESSION['notify']);
        $_SESSION['notify']['title'] = '';
        $_SESSION['notify']['msg'] = '';
        $_SESSION['notify']['duration'] = '3';
    }

    //workerLog('-- footer.php');
    $return = session_write_close();
    //workerLog('session_write_close=' . (($return) ? 'TRUE' : 'FALSE'));
?>

</body>
</html>
