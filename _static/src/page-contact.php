<?php
include($_SERVER['DOCUMENT_ROOT'] . '/inc/header.php'); ?>

<main class="page">
  <div class="p-fv">
    <div class="p-fv__wrapper">
      <div class="p-fv__title-wrapper">
        <span class="p-page__sub-title">Contact</span>
        <h1 class="p-page__title">お問い合わせ</h1>
      </div>
    </div>
  </div>
  <section class="p-contact">
    <div class="p-contact__wrapper">
      <div class="p-contact__container">
        <h2 class="p-contact__content-title">グループホーム美々</h2>
        <p class="p-contact__text c-content__text">
          【電話でお問い合わせ】<br>
          お問い合わせの際は「ホームページ見ました」とお伝えいただくとスムーズです。<br><br>

          【LINEでお問い合わせ】<br>
          スマートフォンでご覧の場合は「友だち追加ボタン」をタップいただくと友だち追加画面が開きます。<br>
          パソコンでご覧の場合は「友だち追加ボタン」をクリックいただき表示されたQRコードを読み取ると友だち追加画面が開きます。
        </p>
        <div class="p-contact__tel-wrapper">
          <a href="/" class="p-contact__tel">
            <img src="../img/svg/tel.svg" alt="tel" class="p-contact__tel-img">
            0166-74-7401
            <span class="p-contact__tel-detail">9:00～17:00 ／ 日曜・祝日定休</span>
          </a>
        </div>
        <div class="p-contact__line-wrapper">
          <img src="../img/svg/line.svg" alt="line" class="p-contact__line-img">
          <a href="/" class="p-contact__line-link">
            <img src="../img/svg/line-icon.svg" alt="p-contact__line-icon" class="p-contact__line-icon">
            友だち追加
          </a>
        </div>
      </div>
      <div class="p-contact__container">
        <h2 class="p-contact__content-title">マッサージ事業名称</h2>
        <p class="p-contact__text c-content__text">
          【電話でお問い合わせ】<br>
          お問い合わせの際は「ホームページ見ました」とお伝えいただくとスムーズです。<br><br>

          【LINEでお問い合わせ】<br>
          スマートフォンでご覧の場合は「友だち追加ボタン」をタップいただくと友だち追加画面が開きます。<br>
          パソコンでご覧の場合は「友だち追加ボタン」をクリックいただき表示されたQRコードを読み取ると友だち追加画面が開きます。
        </p>
        <div class="p-contact__tel-wrapper">
          <a href="/" class="p-contact__tel">
            <img src="../img/svg/tel.svg" alt="tel" class="p-contact__tel-img">
            0166-00-0000
            <span class="p-contact__tel-detail">9:00～17:00 ／ 日曜・祝日定休</span>
          </a>
        </div>
        <div class="p-contact__line-wrapper">
          <img src="../img/svg/line.svg" alt="line" class="p-contact__line-img">
          <a href="/" class="p-contact__line-link">
            <img src="../img/svg/line-icon.svg" alt="p-contact__line-icon" class="p-contact__line-icon">
            友だち追加
          </a>
        </div>
      </div>
      <div class="p-contact__container">
        <span class="p-contact__mail-icon">Mail</span>
        <div class="p-contact__mail-title-wrapper">
          <h2 class="p-contact__content-title">メールでのお問い合わせ</h2>
        </div>
        <p class="c-content__text p-contact__note">下記のフォームに必要事項を入力後、プライバシーポリシーをご確認の上「送信確認ボタン」を押して下さい</p>
        <form action="" class="p-contact__form">
          <div class="p-contact__form-container">
            <div class="p-contact__form-item">
              <label for="name" class="p-contact__form-label"><span class="p-contact__form-label--required">必須</span>お名前</label>
              <input type="text" id="name" class="p-contact__form-input" placeholder="例）山田太郎">
            </div>
            <div class="p-contact__form-item">
              <label for="kana" class="p-contact__form-label"><span class="p-contact__form-label--required">必須</span>フリガナ</label>
              <input type="text" id="kana" class="p-contact__form-input" placeholder="例）サンプル タロウ">
            </div>
            <div class="p-contact__form-item">
              <label for="mail" class="p-contact__form-label"><span class="p-contact__form-label--required">必須</span>メールアドレス</label>
              <input type="text" id="mail" class="p-contact__form-input" placeholder="例）example@example.com">
            </div>
            <div class="p-contact__form-item">
              <label for="tel" class="p-contact__form-label"><span class="p-contact__form-label--required">必須</span>電話番号</label>
              <input type="text" id="tel" class="p-contact__form-input" placeholder="例）090xxxx0000">
            </div>
            <div class="p-contact__form-item">
              <label for="inquiry-type">お問い合わせの種類:</label>
              <select name="inquiry_type" id="inquiry-type" class="p-contact__form-select">
                <option value="">選択してください</option>
                <option value="general">グループホーム美々について</option>
                <option value="support">マッサージ事業について</option>
                <option value="feedback">採用について</option>
                <option value="feedback">その他</option>
              </select>
            </div>
            <div class="p-contact__form-item">
              <label for="content" class="p-contact__form-label"><span class="p-contact__form-label--required">必須</span>お問い合わせ内容</label>
              <textarea name="content" id="content" cols="30" rows="10" class="p-contact__form-textarea" placeholder="例）お問い合わせ内容が入ります。"></textarea>
            </div>

            <div class="p-contact__policy">
              <div class="p-contact__policy-text-wrapper">
                <p class="c-content__text">
                  【プライバシーポリシー】
                </p>

                <p class="c-content__text">
                  ■個人情報保護方針について
                  当社が運営するWEBサイトにおいて、皆様の個人情報を厳重な注意をもって取扱い、適切な個人情報の保護及び管理に万全を尽くしています。
                </p>

                <p class="c-content__text">
                  ■当サイトにおける個人情報の収集について
                  当社では、当サイトを利用する皆様の個人情報を無断で収集することはありません。
                  また、次の場合に限り、当社では厳重な注意を持って適切な管理を行います。
                </p>

                （<p class="c-content__text">
                  1）電子メール及びフォームにより当社へのご質問やご意見をいただいた場合。
                  （2）お問い合わせフォームによってプレゼントへの応募をいただいた場合。
                  （3）電子メール及び電話によるお問い合わせ及びご予約などをいただいた場合。
                </p>

                <p class="c-content__text">
                  ■個人情報の適正な管理を行う方法
                  当社では個人情報の管理を行う上で、全てデジタルデータ管理が行われており、収集された個人情報は当社データベースシステム内で厳重なセキュリティにより管理されておりますので、安心してご利用ください。
                </p>

                <p class="c-content__text">
                  ■クッキー（Cookie）について
                  当サイトでは、皆様のサイト利用の利便性を図るために、クッキーを利用しています。これは、皆様とのやりとりをお使いのPCにクッキーとして保存して頂くことで、2回目以降のフォームへの入力を簡素化したりする機能です。
                  また、この機能はお使いのブラウザによって、事前にクッキーを使用サイトであることを表示したり、受け取りを拒否することができます。
                </p>

                <p class="c-content__text">
                  ■このサイトにおける個人情報取扱いに関する考え方について
                  当サイトにおける、個人情報取扱いに関する考え方は、今後、お客様の個人情報管理体制の強化、セキュリティの向上を図り、よりよいサービスを展開するために改正する場合があります。
                  その際はトップページにて告知いたします。
                  また、個人情報の取扱いについてご質問などありましたら、お問い合わせフォームをご利用ください。
                </p>
              </div>
              <div class="p-contact__policy-btn">
                <input type="checkbox" id="policy" class="p-contact__policy-checkbox">
                <label for="policy" class="p-contact__policy-label">プライバシーポリシーに同意する</label>
              </div>
              <div class="p-contact__form-submit">
                <input type="submit" value="送信確認" class="p-contact__form-submit-btn">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/inc/sns.php'); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/inc/contact-cta.php'); ?>
</main>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php'); ?>
