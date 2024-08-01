<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="プチコーヒーショップの美味しいピザとワッフルのテイクアウト">
    <meta name="ketwords" content="ピザ、ワッフル、コーヒー、紅茶、テイクアウト、カフェ、プチ">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Puchi カフェ</title>
</head>
<body>
     <?php include "../includes/nav.php" ?>
    <main>
    <div class="container">
        <h2>新規会員登録</h2>
        <p>新規会員登録のため、下記の必要な項目を入力してください。</p>
        <form action="#" method="POST">
            <div class="form-group">
                <label for="last-name-kanji">姓 <span style="color: red;">*</span></label>
                <input type="text" id="last-name-kanji" name="last-name-kanji" placeholder="坂本" required>
            </div><br />
            <div class="form-group">
                <label for="first-name-kanji">名<span style="color: red;">*</span></label>
                <input type="text" id="first-name-kanji" name="first-name-kanji" placeholder="龍馬" required>
            </div><br />
            <div class="form-group">
                <label for="last-name-katakana">セイ <span style="color: red;">*</span></label>
                <input type="text" id="last-name-katakana" name="last-name-katakana" placeholder="サカモト" required>
            </div><br />
            <div class="form-group">
                <label for="first-name-katakana">メイ <span style="color: red;">*</span></label>
                <input type="text" id="first-name-katakana" name="first-name-katakana" placeholder="リョウマ" required>
            </div><br />
            <div class="form-group">
                <label for="cellphone">携帯番号<span style="color: red;">*</span></label>
                <input type="text" id="cellphone" name="cellphone" placeholder="oooooooOooO" readonly>
            </div><br />
            <div class="form-group">
                <label for="password">パスワード<span style="color: red;">*</span></label>
                <input type="password" id="password" name="password" placeholder="パスワード" required>
                <p style="color: darkred;">※アルファベットと数字を組み合わせた</p>
                <p style="color: darkred;">8文字以上32文字以下の半角英数字で入力してください。</p>
            </div><br />
            <div class="form-group">
                <label for="confirm-password">パスワード再入力<span style="color: red;">*</span></label>
                <input type="password" id="confirm-password" name="confirm-password" placeholder="パスワード再入力" required>
                <p style="color: darkred;">※確認のため、同じパスワードを入力ください。</p>
            </div><br />
            <div class="form-group">
                <label for="terms">会員規約</label>
                <p class="terms">ご登録の前に､会員規約を必ずご覧ください｡会員登録が完了した時点で､この規約に同意いただいたものとします｡</p>
                <textarea style="height: 200px; width: 350px" name="terms" readonly>
会員登録に関する利用規約

1. **規約の受諾**
   [Puchi カフェ]の会員として登録することにより、これらの利用規約に従うことに同意したものとみなします。これらの規約のいずれかに同意しない場合は、登録を行わないでください。

2. **資格要件**
   会員として登録するには、少なくとも[最低年齢、例：18歳]である必要があります。登録プロセスでは、正確かつ完全な情報を提供してください。

3. **会員特典**
   会員として、[割引、特別オファーなどの特典を列挙]を含む独占的な特典を受け取ることができます。これらの特典は、[カフェ名]の裁量により変更される場合があります。

4. **プライバシーポリシー**
   当社はお客様のプライバシーを尊重し、個人情報の保護に努めています。お客様の情報の収集、使用、保護については、当社のプライバシーポリシー[プライバシーポリシーへのリンク]をご参照ください。

5. **会員の責任**
   - 会員は、アカウント情報（パスワードを含む）の機密性を保持する責任があります。
   - アカウントの不正使用やその他のセキュリティ侵害については、直ちに当社に通知することに同意します。
   - 会員は、違法または禁止されている活動に会員資格を使用しないことに同意します。

6. **キャンセルと終了**
   - 会員は、[連絡先情報]に連絡することで、いつでも会員資格をキャンセルすることができます。
   - [カフェ名]は、これらの利用規約に違反した場合、または当社の利益に有害であるとみなされる行為に従事した場合、通知なしに会員資格を終了させる権利を有します。

7. **責任の制限**
   [カフェ名]は、お客様のサービスの利用に起因する、または関連する、直接的、間接的、偶発的、特別、または結果的損害について一切責任を負いません。

8. **規約の変更**
   [カフェ名]は、これらの利用規約を予告なく更新または変更する権利を有します。お客様が当社のサービスを引き続き利用することにより、新しい規約に同意したものとみなされます。

9. **準拠法**
   これらの利用規約は、[お客様の管轄]の法律に従って解釈されます。これらの規約に関連して発生するすべての紛争は、[お客様の管轄]の裁判所の専属管轄に服するものとします。

10. **お問い合わせ**
   これらの利用規約についてご質問がある場合は、[連絡先情報]までお問い合わせください。

「同意する」をクリックすることにより、これらの利用規約を読み、理解し、それに従うことに同意したものとみなされます。

                </textarea>
            </div><br />
            <div class="form-group checkbox">
                <input type="checkbox" id="agree" name="agree" required>
                <label for="agree">上記会員規約に同意する。<span style="color: red;">*</span></label>
            <p style="color: darkred">※会員規約に同意し会員登録するには、チェックボックスにチェックを入れてください。</p>
            </div><br />
            <div class="form-group">
                <button type="submit">登録</button>
            </div><br /><br />
        </form>
    </div>
        <footer>
            <p style="position: fixed; bottom: 0; text-align: center">&copy; 2024 SysDevLink. All rights reserved.</p>
        </footer>
    </main>
</body>
</html>


