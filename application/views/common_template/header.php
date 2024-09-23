<!DOCTYPE html>
<html lang="en-IN">

<head>
    <title><?= @$page_title; ?></title>
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="Keywords" content="Maha Sale">
    <meta name="Description" content="Maha Sale">
    <meta property="og:title" content="Maha Sale">
    <meta name="theme-color" content="#9f2089" id="themeColor">
    <meta name="viewport" content="width=device-width,minimum-scale=1,user-scalable=no">
    <link rel="shortcut icon" href="https://www.meesho.com/favicon.ico">
    <link rel="stylesheet" href="<?= base_url();  ?>assets/website/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url();  ?>assets/website/css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="<?= base_url();  ?>assets/website/js/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <?php
    $website = base_url();
    $con = array(
        "website_url" => $website
    );
    $settings_data = $this->model->get_all_records("settings", $con, true);

    if (@$settings_data['pixel_code']) {
        echo @$settings_data['pixel_code'];
    }
    ?>

    <?php

    if (@$settings_data['analytics']) {
        echo @$settings_data['analytics'];
    }
    ?>
</head>

<body class="expansion-alids-init" cz-shortcut-listen="true">
    <div class="overlay" id="overlay"></div>
    <div class="Loaderstyled__DrawerBackdrop-sc-w4grmz-6 itivvW">
        <div class="Loaderstyled__StyledDrawerBackdrop-sc-w4grmz-4 ffUKkP">
            <div class="Loaderstyled__StyledLoaderWrapper-sc-w4grmz-5 kIzYUf">
                <svg xmlns="http://www.w3.org/2000/svg" class="Loaderstyled__StyledLoader-sc-w4grmz-0 kxdQNm">
                    <path d="M 7 30 L 7 18 A 7 7 0 0 1 21 18 L 21 30 M 21 18 A 7 7 0 0 1 35 18 L 35 30" class="Loaderstyled__StyledLightTrack-sc-w4grmz-1 dxZalB">
                    </path>
                    <path d="M 7 30 L 7 18 A 7 7 0 0 1 21 18 L 21 30" class="Loaderstyled__StyledDarkTrack-sc-w4grmz-2 byJEYc">
                    </path>
                    <path d="M 21 30 L 21 18 A 7 7 0 0 1 35 18 L 35 30" class="Loaderstyled__StyledDarkTrack-sc-w4grmz-2 Loaderstyled__StyledDarkRightTrack-sc-w4grmz-3 byJEYc lpeJlm">
                    </path>
                </svg>
            </div>
        </div>
    </div>

    <div id="container" style="overflow:hidden">
        <div style="height:100%" data-reactroot="">
            <div>
                <div class="_2dxSCm">
                    <div class="_3CzzrP" style="">
                        <div class="_38U37R">
                            <div>
                                <div class="_1FWdmb" style="">
                                    <div class="d-flex align-items-center">
                                        <a class="_3NH1qf <?= @$back_btn ? "" : "d-none"; ?>" id="back-btn" style="margin-top:5px;">
                                            <svg width="25" height="25" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" mt="2" iconSize="24" class="sc-gswNZR ffVWIj">
                                                <path d="M13.7461 2.31408C13.5687 2.113 13.3277 2 13.0765 2C12.8252 2 12.5843 2.113 12.4068 2.31408L6.27783 9.24294C5.90739 9.66174 5.90739 10.3382 6.27783 10.757L12.4068 17.6859C12.7773 18.1047 13.3757 18.1047 13.7461 17.6859C14.1166 17.2671 14.0511 16.5166 13.7461 16.1718L8.29154 9.99462L13.7461 3.82817C13.9684 3.57691 14.1071 2.72213 13.7461 2.31408Z" fill="#666666"></path>
                                            </svg>
                                        </a>
                                        <a class="_3NH1qf <?= @$back_btn ? "d-none" : ""; ?>" id="showmenu">
                                            <svg width="100%" height="100%"  fill="none" xmlns="http://www.w3.org/2000/svg" mt="5" iconsize="24" class="sc-gswNZR jQgwzc">
                                                <path d="M2 17.2222C2 17.8359 2.49746 18.3333 3.11111 18.3333H20.8889C21.5025 18.3333 22 17.8359 22 17.2222C22 16.6086 21.5025 16.1111 20.8889 16.1111H3.11111C2.49746 16.1111 2 16.6086 2 17.2222ZM2 11.6667C2 12.2803 2.49746 12.7778 3.11111 12.7778H20.8889C21.5025 12.7778 22 12.2803 22 11.6667C22 11.053 21.5025 10.5556 20.8889 10.5556H3.11111C2.49746 10.5556 2 11.053 2 11.6667ZM3.11111 5C2.49746 5 2 5.49746 2 6.11111C2 6.72476 2.49746 7.22222 3.11111 7.22222H20.8889C21.5025 7.22222 22 6.72476 22 6.11111C22 5.49746 21.5025 5 20.8889 5H3.11111Z" fill="#333333"></path>
                                            </svg>
                                        </a>
                                        <?php if (!@$header_title) { ?>
                                            <a class="Z4_K_h" style="width:auto;height:auto;margin-right:10px;margin-left:10px" href="<?= base_url();  ?>">
                                                <svg viewBox="0 0 156 36" fill="none" xmlns="http://www.w3.org/2000/svg" height="25" width="90" iconsize="20" class="sc-gswNZR gNMKRJ">
                                                    <g clip-path="url(#meeshoLogo_svg__a)">
                                                        <path fill="#fff" d="M0 0h156v36H0z"></path>
                                                        <path d="M56.307 23.698c.38-.29.568-.707.568-1.253 0-1.731-.237-3.288-.707-4.675-.47-1.383-1.154-2.56-2.053-3.535a8.967 8.967 0 0 0-3.235-2.232c-1.262-.515-2.685-.774-4.264-.774-2.157 0-4.08.492-5.767 1.48-1.687.99-3.007 2.35-3.969 4.08-.957 1.732-1.436 3.755-1.436 6.063 0 2.372.492 4.42 1.481 6.157.989 1.731 2.394 3.069 4.22 4.013 1.825.944 3.995 1.414 6.518 1.414 1.186 0 2.47-.161 3.852-.479 1.383-.318 2.604-.814 3.669-1.48.546-.336.935-.73 1.163-1.186.228-.457.313-.904.25-1.347a2.007 2.007 0 0 0-.523-1.119c-.29-.304-.675-.478-1.163-.523-.488-.045-1.047.112-1.687.479a9.65 9.65 0 0 1-2.805 1.024c-.989.197-1.88.295-2.667.295-2.281 0-4.004-.613-5.176-1.847-.926-.976-1.481-2.358-1.673-4.125h13.78c.707 0 1.244-.144 1.624-.43Zm-12.72-7.705c.895-.595 1.982-.89 3.262-.89 1.154 0 2.12.25 2.894.752.774.5 1.37 1.226 1.777 2.165.34.783.532 1.732.59 2.828H40.93c.107-.864.304-1.655.603-2.349.475-1.078 1.16-1.915 2.054-2.505ZM81.13 23.698c.38-.29.568-.707.568-1.253 0-1.731-.237-3.288-.707-4.675-.47-1.383-1.154-2.56-2.054-3.535a8.966 8.966 0 0 0-3.234-2.232c-1.262-.515-2.685-.774-4.264-.774-2.157 0-4.08.492-5.767 1.48-1.687.99-3.007 2.35-3.969 4.08-.957 1.732-1.436 3.755-1.436 6.063 0 2.372.492 4.42 1.48 6.157.99 1.731 2.394 3.069 4.22 4.013 1.825.944 3.995 1.414 6.519 1.414 1.185 0 2.47-.161 3.852-.479 1.383-.318 2.604-.814 3.669-1.48.546-.336.935-.73 1.163-1.186.228-.457.313-.904.25-1.347a2.008 2.008 0 0 0-.523-1.119c-.29-.304-.675-.478-1.163-.523-.488-.045-1.047.112-1.687.479a9.65 9.65 0 0 1-2.805 1.024c-.989.197-1.88.295-2.667.295-2.282 0-4.004-.613-5.176-1.847-.931-.976-1.481-2.358-1.674-4.125h13.78c.703 0 1.245-.144 1.625-.43Zm-12.72-7.705c.895-.595 1.982-.89 3.261-.89 1.155 0 2.121.25 2.895.752.774.5 1.37 1.226 1.776 2.165.34.783.533 1.732.591 2.828h-11.18c.106-.864.303-1.655.603-2.349.47-1.078 1.154-1.915 2.054-2.505ZM97.993 21.394l-4.559-.868c-.881-.152-1.535-.438-1.96-.868-.425-.425-.64-.957-.64-1.597 0-.85.358-1.535 1.07-2.054.716-.514 1.816-.774 3.306-.774.792 0 1.62.108 2.483.318.868.215 1.772.564 2.712 1.047.514.241.98.326 1.391.25a1.71 1.71 0 0 0 1.025-.595 2.47 2.47 0 0 0 .546-1.096 1.975 1.975 0 0 0-.112-1.208c-.166-.394-.479-.716-.935-.957a13.835 13.835 0 0 0-3.396-1.347c-1.173-.29-2.425-.434-3.763-.434-1.852 0-3.494.29-4.926.868-1.427.577-2.546 1.4-3.351 2.46-.805 1.066-1.208 2.327-1.208 3.786 0 1.61.492 2.926 1.48 3.942.99 1.02 2.426 1.709 4.31 2.076l4.559.867c.94.184 1.646.466 2.12.842.47.38.707.921.707 1.62 0 .818-.358 1.48-1.07 1.981-.715.501-1.798.752-3.26.752-1.034 0-2.081-.112-3.146-.34-1.065-.228-2.206-.63-3.418-1.208-.488-.242-.936-.318-1.347-.228-.412.09-.747.29-1.002.59-.26.305-.412.662-.457 1.074a2.24 2.24 0 0 0 .228 1.23c.197.412.542.77 1.025 1.07 1.154.671 2.46 1.14 3.92 1.414 1.458.273 2.84.411 4.147.411 2.886 0 5.199-.63 6.93-1.892 1.732-1.262 2.6-3.002 2.6-5.222 0-1.642-.51-2.948-1.526-3.919-1.011-.957-2.51-1.624-4.483-1.99ZM125.603 12.32c-1.155-.666-2.631-1.002-4.421-1.002-1.794 0-3.396.416-4.81 1.253a7.254 7.254 0 0 0-2.483 2.443V4.437c0-.944-.25-1.656-.751-2.143-.501-.488-1.208-.73-2.121-.73s-1.611.242-2.099.73c-.487.487-.729 1.199-.729 2.143v27.082c0 .944.242 1.664.729 2.165.488.501 1.186.752 2.099.752 1.915 0 2.872-.97 2.872-2.917v-9.986c0-1.732.492-3.123 1.481-4.17.989-1.047 2.318-1.575 3.991-1.575 1.369 0 2.38.393 3.034 1.185.653.792.979 2.054.979 3.786v10.76c0 .944.251 1.664.752 2.165.501.501 1.208.752 2.121.752s1.611-.25 2.098-.752c.488-.5.729-1.221.729-2.165V20.486c0-2.067-.29-3.777-.867-5.128-.582-1.355-1.446-2.367-2.604-3.038ZM150.618 12.642c-1.7-.944-3.709-1.413-6.018-1.413-1.731 0-3.297.268-4.698.796-1.396.532-2.599 1.306-3.601 2.326-1.003 1.02-1.772 2.233-2.305 3.647-.532 1.414-.796 3.015-.796 4.81 0 2.37.47 4.429 1.414 6.178.939 1.75 2.264 3.092 3.968 4.036 1.701.944 3.709 1.414 6.018 1.414 1.732 0 3.297-.269 4.698-.797 1.396-.532 2.599-1.306 3.602-2.326 1.002-1.02 1.771-2.242 2.304-3.669.532-1.427.796-3.038.796-4.832 0-2.371-.47-4.42-1.414-6.156-.944-1.736-2.264-3.074-3.968-4.014Zm-1.07 14.201c-.469 1.079-1.132 1.893-1.982 2.439-.85.546-1.838.818-2.961.818-1.701 0-3.07-.613-4.103-1.847-1.034-1.23-1.548-3.047-1.548-5.45 0-1.61.237-2.957.707-4.036.469-1.078 1.132-1.883 1.982-2.416.85-.532 1.839-.796 2.962-.796 1.7 0 3.069.6 4.102 1.799 1.034 1.199 1.548 3.015 1.548 5.45 0 1.614-.237 2.961-.707 4.04ZM15.512 34.431c-1.387 0-2.555-1.167-2.555-2.554V20.18c.013-2.165-1.79-3.915-3.924-3.879-2.134-.036-3.932 1.718-3.924 3.88v11.695a2.557 2.557 0 0 1-2.554 2.554C1.18 34.431 0 33.246 0 31.877V20.22a8.993 8.993 0 0 1 2.649-6.389 8.998 8.998 0 0 1 6.384-2.648 9.012 9.012 0 0 1 6.483 2.742A8.997 8.997 0 0 1 22 11.184a8.982 8.982 0 0 1 6.385 2.648 9.008 9.008 0 0 1 2.649 6.39v11.654c0 1.37-1.181 2.555-2.555 2.555a2.557 2.557 0 0 1-2.555-2.554V20.18c.014-2.165-1.79-3.915-3.924-3.879-2.134-.036-3.932 1.718-3.923 3.88v11.695c-.01 1.387-1.177 2.554-2.564 2.554Z" fill="#570D48"></path>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="meeshoLogo_svg__a">
                                                            <rect width="100%" height="100%" fill="#fff"></rect>
                                                        </clipPath>
                                                    </defs>
                                                </svg>

                                            </a>
                                        <?php } ?>
                                        <h4 class="header-title"><?= @$header_title; ?></h4>
                                    </div>
                                    <div class="header-menu">
                                        <a class="_3NH1qf" href="#">
                                            <svg width="24" height="25" fill="none" xmlns="http://www.w3.org/2000/svg" ml="16" iconSize="24" class="sc-gswNZR dJzkYm">
                                                <path fill="#fff" d="M0 .657h24v24H0z"></path>
                                                <path fill="#fff" d="M2 2.657h20v20H2z"></path>
                                                <path d="M22 9.174c0 3.724-1.87 7.227-9.67 12.38a.58.58 0 0 1-.66 0C3.87 16.401 2 12.898 2 9.174S4.59 3.67 7.26 3.66c3.22-.081 4.61 3.573 4.74 3.774.13-.201 1.52-3.855 4.74-3.774C19.41 3.669 22 5.45 22 9.174Z" fill="#ED3843"></path>
                                            </svg>
                                        </a>
                                        <a class="_3NH1qf" href="#" onclick="openNav()">
                                            <svg width="24" height="25" fill="none" xmlns="http://www.w3.org/2000/svg" ml="16" iconSize="24" class="sc-gswNZR dJzkYm">
                                                <g clip-path="url(#cart-header_svg__a)">
                                                    <path fill="#fff" d="M2.001 1.368h20v20h-20z"></path>
                                                    <g clip-path="url(#cart-header_svg__b)">
                                                        <g clip-path="url(#cart-header_svg__c)">
                                                            <path d="M6.003 5.183h15.139c.508 0 .908.49.85 1.046l-.762 7.334c-.069.62-.537 1.1-1.103 1.121l-12.074.492-2.05-9.993Z" fill="#C53EAD"></path>
                                                            <path d="M11.8 21.367c.675 0 1.22-.597 1.22-1.334 0-.737-.545-1.335-1.22-1.335-.673 0-1.22.598-1.22 1.335s.547 1.334 1.22 1.334ZM16.788 21.367c.674 0 1.22-.597 1.22-1.334 0-.737-.546-1.335-1.22-1.335-.673 0-1.22.598-1.22 1.335s.547 1.334 1.22 1.334Z" fill="#9F2089"></path>
                                                            <path d="m2.733 4.169 3.026 1.42 2.528 12.085c.127.609.615 1.036 1.181 1.036h9.615" stroke="#9F2089" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                                <defs>
                                                    <clipPath id="cart-header_svg__a">
                                                        <path fill="#fff" transform="translate(2.001 1.368)" d="M0 0h20v20H0z"></path>
                                                    </clipPath>
                                                    <clipPath id="cart-header_svg__b">
                                                        <path fill="#fff" transform="translate(2.001 1.368)" d="M0 0h20v20H0z"></path>
                                                    </clipPath>
                                                    <clipPath id="cart-header_svg__c">
                                                        <path fill="#fff" transform="translate(2.001 3.368)" d="M0 0h20v18H0z"></path>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <span class="header__cart-count header__cart-count--floating bubble-count d-none">0</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="search-bar <?= (@$load_page == 'offer') ? "" : "d-none"; ?>">
                                    <div class="_3QNhdh" id="guidSearch">
                                        <div class="ORogdv">
                                            <div class="_1k9EoO">
                                                <div class="_2d36Hu">
                                                    <a href="javascript:void(0)" class="search-div">
                                                        <div placeholder="Search for Sarees, Kurtis, Cosmetics, etc." class="sc-eeMvmM fscVpr">
                                                            <div class="sc-cUEOzv ilUiic"><svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect width="20" height="20" transform="translate(0 0.560547)" fill="white"></rect>
                                                                    <g clip-path="url(#clip0_2444_6193)">
                                                                        <path d="M13.4564 12.0018L11.4426 14.0156L16.3498 18.9228C16.7013 19.2743 17.2711 19.2743 17.6226 18.9228L18.3636 18.1818C18.7151 17.8303 18.7151 17.2604 18.3636 16.909L13.4564 12.0018Z" fill="#ADADC4"></path>
                                                                        <path d="M14.7135 8.69842C14.7135 12.3299 11.7696 15.2738 8.13812 15.2738C4.50664 15.2738 1.56274 12.3299 1.56274 8.69842C1.56274 5.06694 4.50664 2.12305 8.13812 2.12305C11.7696 2.12305 14.7135 5.06694 14.7135 8.69842Z" fill="#EAEAF2" stroke="#ADADC4" stroke-width="1.125"></path>
                                                                    </g>
                                                                    <defs>
                                                                        <clipPath id="clip0_2444_6193">
                                                                            <rect width="18" height="18" fill="white" transform="translate(1 1.56055)"></rect>
                                                                        </clipPath>
                                                                    </defs>
                                                                </svg></div><input font-size="13px" font-weight="book" type="text" placeholder="Search for Sarees, Kurtis, Cosmetics, etc." readonly="" class="sc-dkrFOg bWTBPR sc-bCfvAP dsLogY search-input-elm sc-bCfvAP dsLogY search-input-elm" color="greyBase" value="">
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sc-bBXxYQ jMfCEJ"></div>