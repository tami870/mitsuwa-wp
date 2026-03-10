# コーディングガイドライン

このプロジェクトで守る記述ルールの簡易一覧です。

---

## HTML

- **BEM または FLOCSS** に従ってクラス名・構造を書く。
- **img タグ**
  - `width` と `height` を必ず指定する。
  - メインビジュアル以外は `loading="lazy"` を付ける。
- **クラス名**は略さず書く。
  - NG: `.ttl`
  - OK: `.title`
- **サイト内のパス**はルート相対（`/` 始まり）で書く。
  - NG: `./images/sample.png`
  - OK: `/images/sample.png`
- **文字**は UTF-8 で直接書く。数値文字参照・文字実体参照は使わない。
  - NG: `&copy;` `&#9312;`
  - OK: `©` `①`

---

## PHP (WordPress)

- **コンポーネント化とファイル配置**:
  - 汎用コンポーネントは `template-parts/compornet/` 内に作成する。
- **ファイル名**: 
  - `template-parts` 内の PHP ファイル名には、FLOCSSの接頭辞 (`c-` や `p-` など) を含めない。
  - NG: `c-title.php`, `c-more-btn.php`
  - OK: `sectionTitle.php`, `more-btn.php`, `contactArea.php`
  - 用途がわかる名前（キャメルケースやケバブケース等）とし、バリエーションがある場合はモディファイアを含める（例: `more-btn--big.php`）。
- **引数の受け渡しとエスケープ**:
  - コンポーネントは `$args` を介してプロパティを受け取るようにし、安定動作のためデフォルトフォールバックを設ける（例: `$sub_title = $args["sub_title"] ?? "";`）。
  - 出力時は属性やテキストに応じて必ずエスケープ処理 (`esc_html()`, `esc_url()` 等) を行う。
- **HTMLクラス**:
  - HTMLソース上では引き続きFLOCSSのクラス名（`.c-title`, `.c-more-btn` 等）を記述する。

---

## CSS / SCSS

### CSS設計および命名規則（FLOCSS）

接頭辞を厳格に使い分け、ディレクトリ構造を整理します。

- `l-*` (Layout): サイト全体の大きな枠組み。
  - コンテンツ幅のコンテナには、`box-sizing: content-box;` と `padding-inline: var(--padding-inline);` を用いた `.l-inner` を活用する。
- `c-*` (Component): ボタン、カード等、再利用可能な最小単位。
  - **ファイル配置**: `src/assets/styles/components/` に配置する。
  - **ファイル名**: `_c-` を接頭辞とする（例: `_c-more-btn.scss`, `_c-title.scss`）。
  - **ルートクラス**: ルートのクラス名はコンポーネント名（ファイル名から拡張子と `_` を除いたもの）と一致させる。
- `p-*` (Project): 特定ページ特有の要素。
- `u-*` (Utility): わずかなスタイル調整や状態切り替え。
  - **PC/SP表示切り替え**: `.u-pc-only`, `.u-sp-only` を利用する。
  - **行高（line-height）の余白トリミング**: `.u-trim-leading` を利用する。
- **モディファイア:** `--blue` 等、ハイフン2つによる命名、見た目による命名で統一し、親要素のSCSSファイル内に記述する。
- **ネストは書かない**（FLOCSS の方針）。

### 論理プロパティへの完全移行

モダンブラウザへの適応とチーム内標準化のため、物理プロパティ（top/left等）を廃止し、論理プロパティを採用します。

- `margin-top` → `margin-block-start`
- `width` → `inline-size` / `height` → `block-size`
※タミ氏は狐屋氏のスタイルに合わせ、本プロジェクトを通じてこの記法を習得・統一することに合意済み。

### レスポンシブと PC/SP の数値単位ルール

- **レスポンシブ対応**:
  - モバイルファーストで記述し、PC用のスタイルは `@include mq('md') { ... }` の中に書く。
- **0.75倍ルール**:
  - **PCの場合**: 基本的にデザインカンプの数値に **0.75** をかけて対応します（特に `inline-size` や `font-size` は基本すべて対象）。
  - **可変対応（clamp）**: 幅が大きくて改行しそうな箇所や、デザイン崩れが起きそうな箇所は、0.75をかけた数値を最大値として `clamp()` で対応します。それで違和感がある場合はよしなに調整します。
  - **SPの場合**: 0.75はかけず、カンプの数値をそのまま使用します。
  - **REMの計算と変数**: font-size 等は rem を基本とし、数値の計算にはプロジェクトで定義されている `calc(var(--to-rem) * 値)` や、0.75掛け済みの `calc(var(--075) * 値)` を使用します。

### その他の基本ルール

- 妥当な CSS を使う（[CSS Validator](https://jigsaw.w3.org/css-validator/) を参照）。
- **インライン style は使わない**。クラスで指定する。
- **等間隔**は `gap` を使う。
- **画像の縦横比**は `aspect-ratio` で指定する。

---

## 画像

- **ファイル名**: 英小文字・数字・ハイフン・アンダースコアのみ。
- **形式**: `カテゴリ[_名前][_連番][_状態].拡張子`
  - 例: `bg_sample.png` / `image_mv_01.webp` / `icon_arrow.svg`
- **配置**: すべて `src/assets/images/` に置く（ページ別フォルダには分けない）。
- 参考: [命名規則の記事](https://webnaut.jp/technology/20210910-3953/)

---

## JavaScript

- 変数は **`const` または `let`** を使う。**`var` は使わない**。
- ES モジュールで記述する。
- **SPのレスポンシブ固定（375px以下）**: `_viewport.js` により、端末の画面幅が375pxを下回る場合は `<meta name="viewport" content="width=375">` で固定し、縮小表示させる仕組みを採用しています。
