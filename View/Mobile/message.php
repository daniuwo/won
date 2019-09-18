{include common/header}
{include common/navbar}
<section class="mdui-m-a-4" style="text-align: center">
    {if $bool}
    {else}
        <i class="iconfont iconerror-warning-line mdui-text-color-red" style="font-size: 4rem;"></i>
    {/if}
    <div class="mdui-text-color-red-500 mdui-typo-title">{$msg}</div>
    <div class="mdui-m-t-4">
        <a href="javascript:history.back(-1);" class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-blue-grey-100 mdui-m-r-3">返回上页</a>
        <a href="{#WWW}" class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent">返回首页</a>
    </div>
</section>
{include common/footer}