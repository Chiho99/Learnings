## 1.環境構築

### 1-1. Node環境の確認とインストール
1. Homebrewのバージョンを確認  
`brew --version`  
2. インストールされていなければ実行  
`/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"`  
3. nodebrewのインストール  
`brew install nodebrew`  
4. nodeの安定バージョンをインストール  
`nodebrew install stable`  
5. nodebrewのバージョン一覧を確認  
`nodebrew ls`
6. インストールしたバージョンを指定して切り替える  
`nodebrew use v14.15.3`  
7. nodeのパスを通す  
`echo 'export PATH=$HOME/.nodebrew/current/bin:$PATH' >> ~/.bash_profile'`  
8. ターミナルの再起動  
9. nodeとnpmのバージョン確認  
`node -v`  
`npm -v`  

### 1-2. TypeScript環境構築
1. 開発用ディレクトリの作成  
`mkdir ~/<YOUR_DEV_DIR>/ts-basic`
2. npmの初期化  
`npm init`
3. 関連パッケージのインストール(※)  
`npm install --save-dev typescript ts-loader webpack webpack-cli webpack-dev-server` 
4. webpack.config.jsの作成と設定  
5. tsconfig.jsonの作成と設定  
`tsc --init`  

### 各パッケージの役割
<table>
<tr>
<th>パッケージ名</th>
<th>役割</th>
</tr>
<tr>
<td>typescript</td>
<td>TS構文をJS構文に変換するコンパイラ</td>
</tr>
<tr>
<td>ts-loader</td>
<td>Webpackと連動してTSコンパイラを起動</td>
</tr>
<tr>
<td>webpack</td>
<td>複数のファイルを1つにまとめる</td>
</tr>
<tr>
<td>webpack-cli</td>
<td>コマンドラインでwebpackを使う</td>
</tr>
<tr>
<td>webpack-dev-server</td>
<td>
webpackのビルド<br>
開発用Webサーバの起動<br>
ホットリロード(ファイル変更の自動検知と再読み込み)<br>
</td>
</tr>
</table>

### tsconfigの基本的な設定項目
<table>
<tr>
<th>設定項目</th>
<th>初期値</th>
<th>意味</th>
</tr>
<tr>
<td>target</td>
<td>"es5"</td>
<td>コンパイル後のJSのバージョン</td>
</tr>
<td>module</td>
<td>"commonjs"</td>
<td>どの方式でモジュール関連のコードを扱うか</td>
</tr>
<td>strict</td>
<td>true</td>
<td>TSの基本的なチェックを全てtrueにするか</td>
</tr>
<td>esModuleInterop</td>
<td>true</td>
<td>import文を使って読み込めるようにするか</td>
</tr>
<td>forceConsistentCasingInFileNames</td>
<td>true</td>
<td>ファイル名の大小を区別するか</td>
</tr>
<td>allowjs</td>
<td>true</td>
<td>JSファイルを許容するか</td>
</tr>
<td>jsx</td>
<td>"preserve"</td>
<td>JSXファイルをどうコンパイルするか</td>
</tr>
<td>lib</td>
<td>[]</td>
<td>使用するJSライブラリ</td>
</tr>
<td>outDir</td>
<td>"./"</td>
<td>ビルド結果の出力先</td>
</tr>
<td>baseUrl</td>
<td>"./"</td>
<td>import文のベースパス(絶対パスを使える)</td>
</tr>


