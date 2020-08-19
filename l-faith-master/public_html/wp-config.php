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
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'l-faith' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'local' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'centered' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         ';t;PIHg%?^dH>cht94bGQFN>r:-sdUA}E:_[y~RxK)i5o$3s>WC5N.AvK.jePM88' );
define( 'SECURE_AUTH_KEY',  'AWn^Rv}[/o<}#^qe2O.U~]@E$|G%p+aT kw+guDPhXx34LVW?S5,=8@*O>*0`[3]' );
define( 'LOGGED_IN_KEY',    'R9$~j_i5lpajJY9u@AX=%,;?T(k38cwnVGfFs7`-ZzrVAK]usSf{FTwHn9SH&5(z' );
define( 'NONCE_KEY',        '6Q;WQL{$k1/js@/qvr/c[9k3KwaZjNIo`EpCoSc8uyH($^Df<zsO:-oufdGNj#gj' );
define( 'AUTH_SALT',        '%.)xX#MKCG|s%`wP?d5!.VY{d^_{+enQJ5Uzbr6R-[pk_YwAp#/mq@l>(zkf>B#1' );
define( 'SECURE_AUTH_SALT', ',r4>B+(^6*8/l,3%pny:xCERPXjp(PaExGMl7Nf&t?qQ-o?U@-1?,~]/o6Di9r)L' );
define( 'LOGGED_IN_SALT',   'mNm_-v4G<hw$47>3oDnq<J<4=3M]aNeBv%QKV|}0@6X>~m~P>0sm*=Jg9`Xqqt:0' );
define( 'NONCE_SALT',       'Y2% &9D}vNVA-xD{_;G4`]2t?R0QXsyCmX`,f3c$0Av:SNok!pP+mraHGIKRe~fz' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

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

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
