<template>
    <div class="normal-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="normal-table-list mg-t-30">
                        <div class="basic-tb-hd">
                            <h2>Documents</h2>

                        </div>
                        <div class="bsc-tbl-hvr">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                        <th>Nickname</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="content in contents">
                                    <!-- <tr> -->
                                        <th>#</th>
                                        <td>4</td>
                                        <td>{{ content.head }}</td>
                                        <td>@mitchell4u</td>
                                        <td>AdskiDeAnus</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props:{
        contents: {},
    },
}
</script>