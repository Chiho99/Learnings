# <a href="https://typescript-jp.gitbook.io/deep-dive/getting-started">TypeScript簡易まとめ</a>

### コマンド
- コンパイル 
  ``` 
  # 特定ファイルのコンパイル
  $ tsc main.ts
  
  # 複数のコンパイル
  $ tsc main.ts index.ts

  # 全ての.tsファイルをコンパイルする
  $ tsc *.ts

  # 指定したファイルに変更がなされたら自動でコンパイルさせる事も可能
  $ tsc main.ts --watch
  ```

### webpack
- モジュールバンドラ
- 依存関係を考慮しながJSを1ファイルにまとめる

### TypeScript
- コンパイラを使う
- TypeScriptで書いたコードをJSに変換
- 新しい構文を古いブラウザでも動かせる

![compiler](https://user-images.githubusercontent.com/57189967/127759162-3e88e0f1-7d6a-4c6b-97a7-114ec49c0602.png)
コンパイル：.ts → .js
バンドル：.js → bandle.js


