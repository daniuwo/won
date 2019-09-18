{include common/header}
<style>
    /*----------------------------------------
    Maintenance
    ------------------------------------------*/
    .section-maintenance {
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        overflow: hidden;

        height: 100vh;

        background: #fff;

        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -moz-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -moz-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .section-maintenance {
        text-align: center;
    }
    .section-maintenance #maintenance h6 {
        line-height: 1.7rem;
    }

    .section-maintenance #maintenance .maintenance-img {
        width: 35%;
    }

    @media screen and (max-width: 540px) {
        .section.section-maintenance .error-code {
            font-size: 2rem !important;
        }
    }

</style>
<div class="row">
    <div class="col s12">
        <div class="container">
            <div class="section p-0 m-0 height-100vh section-maintenance">
                <div class="row">
                    <!-- Maintenance -->
                    <div id="maintenance" class="col s12 center-align white">
                        <img src="{#WWW_STATIC}images/maintenance.png"
                            class="responsive-img maintenance-img" alt="">
                        <h4 class="error-code">网站正在维护中</h4>
                        <h6 class="mb-2 mt-2">{$msg}</h6>
                        <a class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" href="{#URL('/admin')}">管理员登录</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{include common/footer}