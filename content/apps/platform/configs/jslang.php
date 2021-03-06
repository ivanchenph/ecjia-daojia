<?php
//
//    ______         ______           __         __         ______
//   /\  ___\       /\  ___\         /\_\       /\_\       /\  __ \
//   \/\  __\       \/\ \____        \/\_\      \/\_\      \/\ \_\ \
//    \/\_____\      \/\_____\     /\_\/\_\      \/\_\      \/\_\ \_\
//     \/_____/       \/_____/     \/__\/_/       \/_/       \/_/ /_/
//
//   上海商创网络科技有限公司
//
//  ---------------------------------------------------------------------------------
//
//   一、协议的许可和权利
//
//    1. 您可以在完全遵守本协议的基础上，将本软件应用于商业用途；
//    2. 您可以在协议规定的约束和限制范围内修改本产品源代码或界面风格以适应您的要求；
//    3. 您拥有使用本产品中的全部内容资料、商品信息及其他信息的所有权，并独立承担与其内容相关的
//       法律义务；
//    4. 获得商业授权之后，您可以将本软件应用于商业用途，自授权时刻起，在技术支持期限内拥有通过
//       指定的方式获得指定范围内的技术支持服务；
//
//   二、协议的约束和限制
//
//    1. 未获商业授权之前，禁止将本软件用于商业用途（包括但不限于企业法人经营的产品、经营性产品
//       以及以盈利为目的或实现盈利产品）；
//    2. 未获商业授权之前，禁止在本产品的整体或在任何部分基础上发展任何派生版本、修改版本或第三
//       方版本用于重新开发；
//    3. 如果您未能遵守本协议的条款，您的授权将被终止，所被许可的权利将被收回并承担相应法律责任；
//
//   三、有限担保和免责声明
//
//    1. 本软件及所附带的文件是作为不提供任何明确的或隐含的赔偿或担保的形式提供的；
//    2. 用户出于自愿而使用本软件，您必须了解使用本软件的风险，在尚未获得商业授权之前，我们不承
//       诺提供任何形式的技术支持、使用担保，也不承担任何因使用本软件而产生问题的相关责任；
//    3. 上海商创网络科技有限公司不对使用本产品构建的商城中的内容信息承担责任，但在不侵犯用户隐
//       私信息的前提下，保留以任何方式获取用户信息及商品信息的权利；
//
//   有关本产品最终用户授权协议、商业授权与技术服务的详细内容，均由上海商创网络科技有限公司独家
//   提供。上海商创网络科技有限公司拥有在不事先通知的情况下，修改授权协议的权力，修改后的协议对
//   改变之日起的新授权用户生效。电子文本形式的授权协议如同双方书面签署的协议一样，具有完全的和
//   等同的法律效力。您一旦开始修改、安装或使用本产品，即被视为完全理解并接受本协议的各项条款，
//   在享有上述条款授予的权力的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反本
//   授权协议并构成侵权，我们有权随时终止授权，责令停止损害，并保留追究相关责任的权力。
//
//  ---------------------------------------------------------------------------------
//
defined('IN_ECJIA') or exit('No permission resources.');


return array(
    'ecjia_platform_page' => array(
        'display_sidebar'   => __('显示侧边栏', 'platform'),
        'hide_sidebar'      => __('隐藏侧边栏', 'platform'),
        'search_check'      => __('请先输入搜索信息', 'platform'),
        'search_no_message' => __('未搜索到导航信息', 'platform'),
        'success'           => __('操作成功', 'platform'),
        'fail'              => __('操作失败', 'platform'),
        'confirm_jump'      => __('是否确认跳转？', 'platform'),
        'ok'                => __('确定', 'platform'),
        'cancel'            => __('取消', 'platform'),
        'request_failed'    => __('请求失败，错误编号：', 'platform'),
        'error_msg'         => __('，错误信息：', 'platform')
    ),

    'ecjia_platform_ui_page'  => array(
        'ok'                      => __('确定', 'platform'),
        'cancel'                  => __('取消', 'platform'),
        'confirm_del'             => __('您确定要删除这条记录吗？', 'platform'),
        'error'                   => __('参数错误，无法删除！', 'platform'),
        'confirm'                 => __('您确定要操作所有选中项吗？', 'platform'),
        'please_select'           => __('请先选中操作项！', 'platform'),
        'batch_error'             => __('批量操作缺少参数！', 'platform'),
        'parameter_error'         => __('参数错误，无法选择！', 'platform'),
        'status_success'          => __('状态修改成功！', 'platform'),
        'clone'                   => __('clone-obj方法未设置data-parent参数。', 'platform'),
        'missing_parameters'      => __('缺少参数', 'platform'),
        'confirm_delete_file'     => __('您确定要删除此文件吗？', 'platform'),
        'browsers_do_not_support' => __('您使用的浏览器并不能很好的支持我们的效果，请更换浏览器访问或开启浏览器history.pushState扩展。', 'platform'),
        'operation_hint'          => __('操作提示', 'platform'),
        'batch_lack_parameters'   => __('批量操作缺少参数', 'platform'),
        'parameter_error'         => __('参数错误，无法选择！', 'platform'),
        'lack_of_parameters'      => __('缺少参数', 'platform'),
    ),
    'admin_page'              => array(
        'platform_required'      => '请选择平台',
        'platform_name_required' => '请输入公众号名称',
        'token_required'         => '请输入Token',
        'appid_required'         => '请输入AppID',
        'appsecret_required'     => '请输入AppSecret',
        'fun_plug_name_required' => '请输入功能扩展名称',
        'fun_plug_info_required' => '请输入功能扩展描述',
        'search_no_plugin'       => '未搜索到扩展信息',
        'ok'                     => '确定',
        'copy_success'           => '复制成功',
        'copy_failed'            => '复制失败，请手动复制',
    ),
    'admin_command_page'      => array(
        'platform_required'      => '请选择平台',
        'platform_name_required' => '请输入公众号名称',
        'token_required'         => '请输入Token',
        'appid_required'         => '请输入AppID',
        'appsecret_required'     => '请输入AppSecret',
        'fun_plug_name_required' => '请输入功能扩展名称',
        'fun_plug_info_required' => '请输入功能扩展描述',
        'search_no_plugin'       => '未搜索到扩展信息',
        'ok'                     => '确定',
        'copy_success'           => '复制成功',
        'copy_failed'            => '复制失败，请手动复制',
    ),
    'admin_plugin_page'       => array(
        'platform_required'      => '请选择平台',
        'platform_name_required' => '请输入公众号名称',
        'token_required'         => '请输入Token',
        'appid_required'         => '请输入AppID',
        'appsecret_required'     => '请输入AppSecret',
        'fun_plug_name_required' => '请输入功能扩展名称',
        'fun_plug_info_required' => '请输入功能扩展描述',
        'search_no_plugin'       => '未搜索到扩展信息',
        'ok'                     => '确定',
        'copy_success'           => '复制成功',
        'copy_failed'            => '复制失败，请手动复制',
    ),
    'merchant_page'           => array(
        'platform_required'      => '请选择平台',
        'platform_name_required' => '请输入公众号名称',
        'token_required'         => '请输入Token',
        'appid_required'         => '请输入AppID',
        'appsecret_required'     => '请输入AppSecret',
        'fun_plug_name_required' => '请输入功能扩展名称',
        'fun_plug_info_required' => '请输入功能扩展描述',
        'search_no_plugin'       => '未搜索到扩展信息',
        'ok'                     => '确定',
        'copy_success'           => '复制成功',
        'copy_failed'            => '复制失败，请手动复制',
    ),
    'merchant_privilege_page' => array(
        'platform_required'      => '请选择平台',
        'platform_name_required' => '请输入公众号名称',
        'token_required'         => '请输入Token',
        'appid_required'         => '请输入AppID',
        'appsecret_required'     => '请输入AppSecret',
        'fun_plug_name_required' => '请输入功能扩展名称',
        'fun_plug_info_required' => '请输入功能扩展描述',
        'search_no_plugin'       => '未搜索到扩展信息',
        'ok'                     => '确定',
        'copy_success'           => '复制成功',
        'copy_failed'            => '复制失败，请手动复制',
    ),
    'platform_command_page'   => array(
        'platform_required'      => '请选择平台',
        'platform_name_required' => '请输入公众号名称',
        'token_required'         => '请输入Token',
        'appid_required'         => '请输入AppID',
        'appsecret_required'     => '请输入AppSecret',
        'fun_plug_name_required' => '请输入功能扩展名称',
        'fun_plug_info_required' => '请输入功能扩展描述',
        'search_no_plugin'       => '未搜索到扩展信息',
        'ok'                     => '确定',
        'cancel'                 => '取消',
    ),
    'platform_extend_page'    => array(
        'platform_required'      => '请选择平台',
        'platform_name_required' => '请输入公众号名称',
        'token_required'         => '请输入Token',
        'appid_required'         => '请输入AppID',
        'appsecret_required'     => '请输入AppSecret',
        'fun_plug_name_required' => '请输入功能扩展名称',
        'fun_plug_info_required' => '请输入功能扩展描述',
        'search_no_plugin'       => '未搜索到扩展信息',
        'ok'                     => '确定',
        'cancel'                 => '取消',
    )

);

// end