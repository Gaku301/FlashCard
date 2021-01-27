<template>
   <!-- Inbox area Start-->
    <div class="inbox-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="inbox-left-sd">
						<div class="compose-ml">
                            <a class="btn" href="#">Compose</a>
                        </div>
                        <div class="inbox-status">
                            <ul class="inbox-st-nav inbox-ft">
                                <li><a href="#"><i class="notika-icon notika-mail"></i> Inbox<span class="pull-right">12</span></a></li>
                                <li><a href="#"><i class="notika-icon notika-sent"></i> Sent</a></li>
                                <li><a href="#"><i class="notika-icon notika-draft"></i> Draft</a></li>
                                <li><a href="#"><i class="notika-icon notika-trash"></i> Trash</a></li>
                            </ul>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="view-mail-list sm-res-mg-t-30">
                        <div class="view-mail-hd">
                            <div class="view-mail-hrd">
                                <h2>{{ $content->{'title'} }}</h2>
                            </div>
                            <div class="view-ml-rl">
                                <p>{{ $content->{'createdAt'} }}</p>
                            </div>
                        </div>
                        <div class="mail-ads mail-vw-ph">
                        </div>
                        <div class="view-mail-atn">
                            <h2>{{ $content->{'title'} }}</h2>
                            <p>{{ $content->{'content'} }}</p>
                        </div>
                        <div class="file-download-system">
                            <div class="dw-st-ic mg-t-20">
                                <div class="dw-atc-sn">
                                    <span><i class="notika-icon notika-paperclip"></i> 4 attachments <i class="notika-icon notika-arrow-right atc-sign"></i></span>
                                </div>
                                <div class="dw-atc-sn">
                                    <a class="btn dw-al-ft" href="#">Download all in zip format <i class="notika-icon notika-file"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="vw-ml-action-ls text-right mg-t-20">
                            <div class="btn-group ib-btn-gp active-hook nk-email-inbox">
                                <button class="btn btn-default btn-sm waves-effect"><i class="notika-icon notika-next"></i> Reply</button>
                                <button class="btn btn-default btn-sm waves-effect"><i class="notika-icon notika-right-arrow"></i> Forward</button>
                                <button class="btn btn-default btn-sm waves-effect"><i class="notika-icon notika-print"></i> Print</button>
                                <button class="btn btn-default btn-sm waves-effect"><i class="notika-icon notika-trash"></i> Remove</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inbox area End-->
</template>

<script>
export default {

}
</script>

<style>

</style>