<?php defined('IN_ECJIA') or exit('No permission resources.');?>
<!-- {extends file="ecjia.dwt.php"} -->
<!-- {block name="footer"} -->
<script type="text/javascript">
	ecjia.admin.goods_type.init();
</script>
<!-- {/block} -->
<!-- {block name="main_content"} -->
<div>
	<h3 class="heading">
	<!-- {if $ur_here}{$ur_here}{/if} -->
	<!-- {if $action_link} -->
	<a href="{$action_link.href}" class="btn plus_or_reply data-pjax" id="sticky_a"><i class="fontello-icon-plus"></i>{$action_link.text}</a>
	<!-- {/if} -->
	</h3>
</div>
<ul class="nav nav-pills">
	<li class="{if $filter.type eq ''}active{/if}"><a class="data-pjax" href='{url path="goodslib/admin_goods_spec/init" args="{if $filter.merchant_keywords}&merchant_keywords={$filter.merchant_keywords}{/if}{if $filter.keywords}&keywords={$filter.keywords}{/if}"}'>{t domain="goodslib"}全部{/t} <span class="badge badge-info">{$filter.count}</span></a></li>
	<li class="ecjiaf-fn">
	<form name="searchForm" method="post" action="{$form_search}{if $filter.type}&type={$filter.type}{/if}">
		<div class="f_r form-inline">
			<input type="text" name="keywords" value="{$smarty.get.keywords}" placeholder="{t domain="goodslib"}请输入商品规格关键字{/t}"/>
			<button class="btn" type="submit">{t domain="goodslib"}搜索{/t}</button>
		</div>
	</form>
	</li>
</ul>
<!-- 商品编辑属性 -->
<div class="row-fluid">
	<div class="span12">
		<table class="table table-striped dataTable table-hide-edit">
			<thead>
				<tr>
					<th class="w200">
						{t domain="goodslib"}商品规格名称{/t}
					</th>
					<th>
						{t domain="goodslib"}属性分组{/t}
					</th>
					<th class="w130">
						{t domain="goodslib"}属性数{/t}
					</th>
					<th class="w80">
						{t domain="goodslib"}状态{/t}
					</th>
				</tr>
			</thead>
			<tbody>
				<!-- {foreach from=$goods_type_list.item item=goods_type} -->
				<tr>
					<td class="hide-edit-area">
						<span class="cursor_pointer" data-trigger="editable" data-url="{RC_Uri::url('goodslib/admin_goods_spec/edit_type_name')}" data-name="edit_type_name" data-pk="{$goods_type.cat_id}" data-title="{t domain="goodslib"}请输入规格名称{/t}"><!-- {$goods_type.cat_name} --></span>
						<div class="edit-list">
							<a class="data-pjax" href='{url path="goodslib/admin_attribute/init" args="cat_id={$goods_type.cat_id}"}' title="{t domain="goodslib"}查看规格属性{/t}">{t domain="goodslib"}查看规格属性{/t}</a>&nbsp;|&nbsp;
							<a class="data-pjax" href='{url path="goodslib/admin_goods_spec/edit" args="cat_id={$goods_type.cat_id}"}' title="{t domain="goodslib"}编辑{/t}">{t domain="goodslib"}编辑{/t}</a>&nbsp;|&nbsp;
							<a class="ajaxremove ecjiafc-red" data-toggle="ajaxremove" data-msg="{t domain="goodslib" escape=no}删除商品规格将会清除该规格下的所有属性。<br/>您确定要删除选定的商品规格吗？{/t}" href='{url path="goodslib/admin_goods_spec/remove" args="id={$goods_type.cat_id}"}' title="{t domain="goodslib"}删除{/t}">{t domain="goodslib"}删除{/t}</a>
						</div>
					</td>
					<td>
						{$goods_type.attr_group}
					</td>
					<td>
						{$goods_type.attr_count}
					</td>
					<td>
						<i class="{if $goods_type.enabled}fontello-icon-ok cursor_pointer{else}fontello-icon-cancel cursor_pointer{/if}" title="{t domain="goodslib"}点击修改状态{/t}" data-trigger="toggleState" data-url="{RC_Uri::url('goodslib/admin_goods_spec/toggle_enabled')}" data-id="{$goods_type.cat_id}"></i>
					</td>
				</tr>
				<!-- {foreachelse} -->
				<tr>
					<td class="no-records" colspan="5">
						{t domain="goodslib"}没有找到任何记录{/t}
					</td>
				</tr>
				<!-- {/foreach} -->
			</tbody>
		</table>
		<!-- {$goods_type_list.page} -->
	</div>
</div>
<!-- {/block} -->