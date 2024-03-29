<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'kuroki');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'kuroki');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'aSV9nFSq4h');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'r-?o+-8/$9HE x-nRxTJg0T3 mc{p:j%dIUqqOrwQc3A@<^V6WGAk?/EkQX/A|dI');
define('SECURE_AUTH_KEY',  'd%@M3~C;r7^(WNDA_@,?VUX$m/!``zUuf/:QTl]bFe`FLL7n RBaCij8o9Dbpu;2');
define('LOGGED_IN_KEY',    '+{6H6~P)=p*PG8M%P3|/;o:a+|bZ5>k9vGHs2s;edpANYk6Ai3.}dn,=]FXAq3}d');
define('NONCE_KEY',        'bt5r2LIYIbP+T Ih0ZbO:_WhDE(yVf;X*ulrTh#=@_[G!YsSQ|RP=*KMxr4+67Me');
define('AUTH_SALT',        'VvF(At9.KE#3gnd)9U57@_5tmr!Sh?k1djm6vMM9XOJpCaD?e&q#Y+IP&6{Yb44M');
define('SECURE_AUTH_SALT', 'Ew*:[y^er-T2~9dbR9aAy51X;Wj<cT*]w9^nB]Cqv]O adOIxrn])K&{C/:&SLT-');
define('LOGGED_IN_SALT',   'z5S 3k_`0!G@<?{@momF(l/0AMUt^df9zXLZf8dp0&8CDRXNlDL$.Y.4+mlPDKvy');
define('NONCE_SALT',       'E|,|Ohg#:IbYK/vvu.5K?YD/!&H.bTbt[VVdbyF~)Umg{ jWVxGYh~Fyd;$0/nxN');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
