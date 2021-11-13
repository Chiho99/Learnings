# コンポーネント指向による UI の構造化

Vue.js は UI を構造化し、コンポーネントとして利用できる。UI を個別にコンポーネント化できると、システムを全体をこれらのコンポーネントの集合として開発していくことができる。

###### UI 構成からコンポーネント化するイメージ

![Screenshot 2021-10-05 at 20 28 31](https://user-images.githubusercontent.com/57189967/136014341-535f782c-923c-4042-a37c-e3da51b08ec1.png)

# リアクティブなデータバインディング

リアクティブなデータバインディングとは

- HTML テンプレート内で対象となる DOM 要素にバインディングを指定することで、Vue.js がそのデータの変更を検出する度に、バインディングされている DOM 要素が自動的に表示内容を更新すること

###### 一方向バインディングの概念図

![Screenshot 2021-10-05 at 20 31 51](https://user-images.githubusercontent.com/57189967/136014717-e7bf9a39-e449-44b0-83c6-0d22e9e4c93f.png)

###### 双方向バインディングの概念図

![Screenshot 2021-10-05 at 20 35 22](https://user-images.githubusercontent.com/57189967/136015215-5ceaf0c7-fe6a-4b0f-8f8b-7605cbab3f3d.png)

# Vue.js の設計思想

プログレッシブフレームワーク

- フレームワークはどんなときにでも、どんな規模でも、段階的に柔軟に使用できるべきである
- 必要になった時に問題解決するライブラリを適宜導入して問題を解決するという姿勢を持っている

# Vue.js を支える技術

###### 単一ファイルコンポーネントによるコンポーネント化

![Screenshot 2021-10-05 at 20 46 12](https://user-images.githubusercontent.com/57189967/136016572-b0d8f3f4-8568-4b95-a1a9-42a1614198a6.png)

```javascript
// sample.vue
<template>
  <p>{{message}}!</p>
</template>
<script>
  export default = {
    data (){
      return {
        message: 'Hello'
      }
    }
  }
</script>
<style scoped>
  p {
    color: red;
  }
</style>
```

# リアクティブシステム

Vue.js のリアクティブシステムは、オブザーバーパターンをベースに実装されている。簡単にいうと、状態の変化を Vue.js が検知(監視)して、自動的に DOM 側に反映できるようにする仕組み。

- リアクティブプロパティ
- Watcher
  によって実現される。

###### リアクティブシステム

![Screenshot 2021-10-05 at 21 13 00](https://user-images.githubusercontent.com/57189967/136020023-85ecb797-dd1c-43cc-a746-d9f39cccc347.png)

###### リアクティブシステムによる算出プロパティ

![Screenshot 2021-10-05 at 21 13 14](https://user-images.githubusercontent.com/57189967/136020063-57013461-6ffb-4b1e-8b7b-6d4e9a68c99b.png)

# レンダリングシステム

Vue.js は仮想 DOM(Virtual-DOM)による DOM の高速なレンダリングを提供している。

### Vue.js の仮想 DOM の処理の流れ

![Screenshot 2021-10-05 at 21 18 43](https://user-images.githubusercontent.com/57189967/136020871-d8a90e61-8f1b-4a98-8bee-86c5286b4d7b.png)

# Vue.js のエコシステム

- <a href="https://github.com/vuejs/vue-router">Vue Router:</a> SPA を実現するためのルーティングプラグイン
- <a href="https://github.com/vuejs/vuex">Vuex:</a> 大規模な Web アプリケーションを構築するための状態管理プラグイン
- <a href="https://github.com/vuejs/vue-loader">Vue Loader:</a> 高度なコンポーネント機能を利用するための webpack 向けのローダーライブラリ
- <a href="https://github.com/vuejs/vue-cli">Vue CLI:</a> Web アプリケーションを構築するためのプロジェクト構成の雛形生成やプロトタイピングにおいて設定なしビルドを行うためのコマンドラインツール
- <a href="https://github.com/vuejs/devtools">Vue DevTools:</a> Vue.js アプリケーションをブラウザの開発ツールでデバッグするためのツール
- <a href="https://nuxtjs.org/">Nuxt.js:</a> SPA と SSR に対応した Vue.js アプリケーションを作成するためのフレームワーク
- <a href="https://incubator.apache.org/projects/weex.html">Weex:</a> Vue.js の構文で iOS、Android アプリケーションを作成するためのフレームワーク
- <a href="https://onsen.io/">Onsen UI:</a> モバイル向け Web アプリケーションを作成するためのフレームワーク
- <a href="https://github.com/vuejs/awesome-vue">Awesome Vue:</a> Vue.js に関連するオープンソースプロジェクトや Vue.js が使用されている Web サイトやアプリケーションなどの情報がユーザーによって共有される公式サイト</a>

- <a href="https://curated.vuejs.org/">Vue Curated:</a> Vue.js コアチームが厳選したプラグイン、ライブラリ、フレームワークなどを検索できる公式サイト

- <a href="https://vuejs.org/">Vue.js 公式ガイド</a>

# Vue インスタンスの主要なオプション

- data
  UI の状態となるデータのオブジェクト

- el
  Vue インスタンスを、マウントする要素
  ※ マウント: 既存の DOM 要素を Vue.js が生成する DOM 要素で置き換えること

- filters
  データを文字列と整形する

- methods
  イベントが発生した時などの振る舞い

- computed
  データから派生して算出される値

# Vue インスタンスのマウント

```javascript
var vm = new Vue({
  el: "#app",
  // ...
});
```

メソッドによるマウント

```javascript
var vm = new Vue({
  // ...
});

// UI操作や通信の後、要素が生成されてからマウントを行う
vm.$mount(el);
```

- $watch メソッド
  第一引数: 監視対象の値を返す関数
  第二引数: 値が変わった場合に呼ばれるコールバック関数

# テンプレート構文

- テンプレートでは、Vue インスタンスのデータとビュー(DOM ツリー)の関係を宣言的に定義する。
  **データとビューの関係を宣言的に定義する**とは、データが決まれば、ビューの内容が決定されるということ。

- データの変更に応じて、ビューを更新する仕組みを**データバインディング**という

###### Vue.js のテンプレート構文で重要な 2 つの概念

- Mustache 記法によるデータの展開

  - `{{ data }}`の方法で記述

- ディレクティブによる HTML 要素の拡張
  - データの内容に応じて、要素を挿入・削除したり、繰り返し要素を追加する
  - ディレクティブは名前が`v-`で始まる属性のこと

# 属性値の展開

- 属性の展開には Mustache 記法は使用できない
- v-bind を利用する
  - `v-bind:属性名="データを展開した属性値"

# フィルタ(filters)

汎用的なテキストフォーマット処理を適用する仕組み

```javascript
// コンストラクタへのオプションfiltersで引数を１つとる関数として定義する
filters: {
  フィルタ名: function(value){
    // return
  }
}
```

# 条件付きレンダリング(v-if/v-show)

v-if、v-show いずれも式の結果に応じて、表示・非表示を切り替えることができる。使い分けの基準は切り替えの頻度と初期表示のコスト。

###### v-if

式の結果に応じて DOM 要素を追加・削除する
式の評価結果がほとんど変わらないときは v-if を利用するのが適切

```javascript
<p v-if="引数">/* 真なら表示、偽なら非表示 */</p>
```

###### v-show

スタイルの display プロパティの値を変更することで実現する
DOM 操作のほうがレンダリングコストが高くなるため、頻繁に式の評価結果が変わる場合には`v-show`を使用するべき

```javascript
<p v-show="引数">/* 真なら表示、偽なら非表示 */</p>
```

# クラスとスタイルのバインディング

UI を実装していて、特定の条件が成立するとき、UI の見た目を変えたい場合がある。このようなときに`v-bind`ディレクティブが使える。

```javascript
v-bind:属性値="データを展開した属性値"
```

###### クラスのバインディング (v-bind:class)

クラスのディレクティブを実現

- 通常の HTML 要素では`("classA classB")`で記述

```javascript
v-bind:class="オブジェクト・配列"
```

- 属性値にオブジェクトを指定した場合に値がプロパティ名を class 属性値として反映する

```javascript
// この場合classはsharkになる
<p v-bind:class="{shark: true, mecha:false}"></p>
```

###### スタイルのバインディング (v-bind:style)

スタイルのディレクティブを実現

- 通常の HTML 要素では`("color: tomato; background: yellow")`で記述

```javascript
v-bind:class="オブジェクト・配列"
```

- 属性値のオブジェクトのプロパティがスタイルのプロパティと対応して、インラインスタイルとして反映される
  下記の場合、`<p style="color:red">a</p> `となる

```javascript
<p v-bind:style="{color:'red'}">a</p>
```

###### リストレンダリング (v-for)

配列あるいはオブジェクトびデータをリストレンダリング（繰り返しレンダリング）できる

```javascript
v-for="要素 in 配列"
```

v-bind:key=~で生成時に一意なキーを各要素に与える

```html
<!-- date: {arr: ['い','ろ','は']} を定義しておく-->
<ul>
  <li v-for="(item, index) in arr" v-bind:key="item">{{index}} {{item}}</li>
</ul>
```

レンダリング後

```html
<ul>
  <li>0 い</li>
  <li>1 ろ</li>
  <li>2 は</li>
</ul>
```

###### イベントハンドリング (v-on)

- v-on イベントが起きた時に属性値の式を実行する。DOM API の`addEventListner`のようなものだと考える。

```javascript
v-on:イベント名="式として実行したい属性値"
```

- v-on の省略記法
  サーバーサイドのテンプレートエンジンでエラーになる場合があるので、その場合は`v-on:~`の形で記述する

```javascript
v-on:click → @click
```

```html
<button :disabled="!canBuy" @click="doBuy">購入</button>
```

###### フォーム入力バインディング (v-model)

双方向データバインディングを実現するディレクティブ
ビュー(DOM)で変更があった時に、その値を Vue インスタンスのデータとして更新する。逆に Vue インスタンスのデータに変更があった場合はビューを再レンダリングする。

```html
<input type="number" v-model="item.qunatity" min="0"></input>
```

##### ライフサイクルフック

<table>
<tr>
  <th>フックの名前</th>
  <th>フックが呼ばれるタイミング</th>
</tr>
<tr>
  <td>beforeCreate</td>
  <td>インスタンスが生成され、データが初期化される前</td>
</tr>
<tr>
  <td>created</td>
  <td>インスタンスが生成され、データが初期化された後</td>
</tr>
<tr>
  <td>beforeMount</td>
  <td>インスタンスがDOM要素にマウントされる前</td>
</tr>
<tr>
  <td>mounted</td>
  <td>インスタンスがDOM要素にマウントされた後</td>
</tr>
<tr>
  <td>beforeUpdate</td>
  <td>データが変更され、DOM要素に適用される前</td>
</tr>
<tr>
  <td>updated</td>
  <td>データが変更され、DOMに適用された後</td>
</tr>
<tr>
  <td>beforeDestroy</td>
  <td>Vueインスタンスが破棄される前</td>
</tr>
<tr>
  <td>destroyed</td>
  <td>Vueインスタンスが破棄された後</td>
</tr>
</table>
<img src="https://user-images.githubusercontent.com/57189967/138598467-3dcfc664-efc9-4124-8788-a9c444d36210.png">

###### created フック

- インスタンスが生成されて、データが初期化された後に呼ばれる
- このライフサイクルフックが呼ばれる段階では、まだ DOM 要素はインスタンスに紐付いていない。

###### mounted フック

- インスタンスに DOM 要素が紐付いた後に呼ばれる
- インスタンスの`$el`プロパティや`querySelectorAll`などの DOM API が利用できるようになるため、DOM 操作やイベントリスナーの登録が必要な場合にはこのフックで行う

###### beforeDestroy フック

- インスタンスが破棄される前に呼ばれる
- mounted フックで DOM 要素に登録したイベントリスナーの破棄や、タイマー処理のクリアといった「後始末」をここで行う
- この処理を適切に行わないとメモリーリークの原因となり、ユーザー体験を損なう結果に繋がり得る

##### メソッド(methods)

データの変更やサーバーに HTTP リクエストを送る際に用いる

```javascript
methods: {
  メソッド名: function(){
    // 処理
  }
}
```

- テンプレート内では`{{メソッド名()}}`のようにテキストの展開の式で呼び出すことができる
- 例:ボタンを押したら入力した値をサーバーに送信するといったケース

```javascript
<button v-bind:disabled="!canBuy" v-on:click="doBuy">
  購入
</button>
```

###### イベントオブジェクト

- v-on ディレクティブの属性値にメソッドを指定した場合、引数にはデフォルトでイベントオブジェクトが渡される
- このオブジェクトにはイベントが発生した要素や座標などの情報が含まれている
- このオブジェクトは標準の DOM API の`addEventListner`で指定するイベントリスナーの第一引数に渡されるイベントオブジェクト同様のもの

```javascript
methods: {
  メソッド名: function(event){
    // 引数eventはイベントオブジェクト
  }
}
```

##### Vue.js のコンポーネントシステム

###### コンポーネント化のメリット

- 再利用性が高まり、開発効率を上げられる
- すでに使用されているコンポーネントを再利用することで、品質を保てる
- コンポーネントを適切に区切り、疎結合にした場合、保守性が高まる
- カプセル化されて開発で意識すべき範囲を限定できるようになる

##### Vue コンポーネントの定義

###### グローバルコンポーネントの定義

第一引数：作成するコンポーネント名(文字列)
第二引数： コンポーネント自体の様々な構成情報を持ったオブジェクトが入る

```javascript
Vue.component(tagName, options);
```

<table>
<tr>
  <th>オプション名</th>
  <th>用途</th>
</tr>
<tr>
  <td>data</td>
  <td>UIの状態・データ</td>
</tr>
<tr>
  <td>filters</td>
  <td>データを文字列に整形する</td>
</tr>
<tr>
  <td>methods</td>
  <td>イベントが発生した時などの振る舞い</td>
</tr>
<tr>
  <td>computed</td>
  <td>データから派生して算出される値</td>
</tr>
<tr>
  <td>template</td>
  <td>コンポーネントのテンプレート</td>
</tr>
<tr>
  <td>props</td>
  <td>親から子へのデータの受け渡し</td>
</tr>
<tr>
  <td>created 他</td>
  <td>ライフサイクルフック(作成時)</td>
</tr>

</table>

###### コンストラクタベースの定義

```javascript
Vue.extend();
```

定義したものを直接特定の要素にマウントするには`$mount` 関数を使用する

```javascript
var Template = Vue.extend({
  template: "<h1>テンプレート</h1>",
});

new Template().$mount("#template");
```

##### ローカルコンポーネントの定義

ある特定の Vue インスタンスの中でのみ使えるように、コンポーネントを登録する

```html
<div id="#app">
  <!-- 定義が閉じているため、他の箇所では使用できない -->
  <items-list></items-list>
</div>
```

```html
<!-- 直接の子を制限するわけでなく、その中で使用できるコンポーネントを制限する -->
<div id="items-list">
  <div>
    <items-list-title></items-list-title>
  </div>
</div>
```

ローカルコンポーネントの定義には、コンストラクタベースのテンプレートも指定できる

```javascript
var ItemsListTitle = Vue.extend({
  /* 略 */
});
```

##### テンプレートを構築するその他の手段

- text/x-template
- インラインテンプレート
- 描画関数
- JSX
- 単一ファイルコンポーネント

###### text/x-template

HTML ファイル中に text/x-template を type として定義した script 要素を用意し、その中にテンプレートの HTML 要素を記述する。このときに script 要素に id を付与しておく。
※ text/x-template はブラウザが認識できない MIME タイプ

```html
<script type="text/x-template" id="items-list-title">
  <h1>アイテム一覧</h1>
</script>
```

定義した id を、template の値として文字列で指定する。

```javascript
Vue.component("items-list-title", {
  template: "#items-list-title",
});
```

###### 描画関数

<details> 
  <summary> Vue.jsではコンポーネントでコードを使用するために、renderオプションが提供されている
  </summary>

`input type=date`の`value` に今日の日付を与える例

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <div id="app">
      <input-date-with-today></input-date-with-today>
    </div>
    <script src="https://unpkg.com/vue@2.5.17"></script>
    <script>
      Vue.component("input-date-with-today", {
        render: function (createElement) {
          return createElement("input", {
            attrs: {
              type: "date",
              value: new Date().toISOString().substring(0, 10),
            },
          });
        },
      });
      new Vue({ el: "#app" });
    </script>
  </body>
</html>
```

</details>
###### JSX

###### 単一ファイルコンポーネント
