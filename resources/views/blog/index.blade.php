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
                            <v-spacer></v-spacer>
                            <v-btn icon small class="ml-2">
                                続きを読む
                                <v-icon>keyboard_arrow_right</v-icon>
                            </v-btn>
                        </v-card-actions>
                    </v-container>
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
