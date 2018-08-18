@extends ('layouts.main')

@section('content')

    <div id="content">
        <v-container fluid grid-list-md>
            <v-layout row wrap>
                {{-- コンテンツ部分 --}}
                <v-flex xs8>
                    <v-card>
                        <v-container fluid>
                            <v-card-title>
                                <div>
                                    <div class="headline">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, facere vel. A atque cumque cupiditate, ducimus est, id itaque libero molestias natus nobis nostrum odio, perspiciatis repellendus rerum sequi similique.
                                    </div>
                                </div>
                                <v-spacer></v-spacer>
                            </v-card-title>

                            <v-card-text>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab culpa eos facilis modi velit! Ad corporis cumque dolorem fugiat libero nesciunt nostrum provident sit sunt vitae. Consectetur esse ipsam quibusdam.</v-card-text>

                            <v-divider></v-divider>
                            <v-card-actions>
                                <v-icon>face</v-icon>
                                admin
                                <v-icon class="ml-2">watch_later</v-icon>
                                2018年2月26日
                                <v-icon class="ml-2">category</v-icon>
                                ブログ
                                <v-icon class="ml-2">comment</v-icon>
                                4 comments
                            </v-card-actions>
                        </v-container>
                    </v-card>

                    {{-- 投稿者情報 --}}
                    <v-card class="mt-3">
                        <v-layout row wrap>
                            <v-flex xs4>

                            </v-flex>

                            <v-flex xs8>
                                <v-card-title>masaru</v-card-title>
                                <v-icon>insert_drive_file</v-icon> 90 posts
                                <v-card-text>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi aperiam architecto dolore, dolorum harum illum ipsam iste laborum maiores molestias mollitia odio officia optio reiciendis sed sunt veniam voluptatem.</v-card-text>
                            </v-flex>
                        </v-layout>
                    </v-card>
                </v-flex>

                {{-- サイドバー --}}
                @include('layouts.sidebar')
            </v-layout>
        </v-container>
    </div>

@endsection

@section('script')
    <script>
        new Vue({ el: '#toolbar' });
        new Vue({ el: '#content' });
    </script>
@endsection
