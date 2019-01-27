<?php include "partials/i-header.php"; ?>

<div class="container text-center" id="main">
    <?php if($error) { ?>
        <div class="alert"><?= $error ?></div>
    <?php } ?>
    <h1>Sign Up</h1>
    <form class="form"action="signupsubmit.php" method="post" >
        Username*<br><input class="input"type="text" name="uname" placeholder="Username" required><br><br>
        Email*<br><input class="input" type="text" name="email" placeholder="Email address" required><br><br>
        Password*<br><input class="input" type="password" name="pass" id="myInput" placeholder="Password" required><br><br>
        Re-enter Password*<br><input class="input" type="password" name="repass" placeholder="Re-enter Password"required><br><br>
        <input type="checkbox" onclick="myFunction()">Show Password<br><br>
        <input type="checkbox" id="myBtn" required>Accept Term & Conditions<br><br>
        <input class="form-submit-button" type="submit" name="submit" value="Submit">
    </form>
    <p class="index">Already have an account?
        <button class="abutton" type="button"><a class="button" href="login.php">Login</a></button>
    </p>
	<br>
</div>



<div id="myModal" class="modal">

    <div class="modal-content">
        <div class="modal-header">
            <h2>Term and Conditions</h2>
        </div>
        <div class="modal-body">
            <p><b>Please read these Terms and Conditions carefully before you use the Services at American Roulette and make sure that you understand its content. These Terms and Conditions, together with the Privacy Policy, constitute a binding agreement (the “Agreement”) between you and American Roulette. </b></p>

            <p><b>By registering an Account at American Roulette, you agree that you have read and understood these Terms and Conditions and the Privacy Policy and acknowledge that these shall apply to you. </b></p>

            <p>American Roulette - Terms and Conditions</p><p><b>If you do not agree to any of these Terms and Conditions or the Privacy Policy you must immediately stop using the Services. </b></p>

            <p><b>If you have any doubts concerning your rights and obligations under this Agreement, please seek advice from an attorney in your jurisdiction. It is essential that you are aware of the laws in your jurisdiction prior to registering. American Roulette is not responsible for any liability to you relating to matters of jurisdiction. </b></p>

            <p><b>Version [08.03.2018] </b></p>

            <p>1. <b>PURPOSE OF THESE TERMS AND CONDITIONS </b></p>

            <p>1.1 The objective of these Terms and Conditions is to govern the legal relations between American Roulette and a Player.</p>

            <p>2. <b>DEFINITIONS AND INTERPRETATION</b></p>

            <p>2.1 The words and terms below, when used in this contract, have the meaning given here, unless the context clearly implies otherwise and will govern the Player’s use of the Website.</p>

            <p>2.1.1 <b>Agreement</b>: These Terms and Conditions, together with the Privacy Policy, Withdrawal Policy, General Promotional Terms and Conditions and House Betting Rules.</p>

            <p>2.1.2 <b>Betting or Bets</b>: for the purposes of these Terms and Conditions include, without limitation, wagering, gaming, and gambling conducted in relation to any and/or all of the Services offered on the Website.</p>

            <p>2.1.3 <b>Devices</b>: means any application devices, included but not limited to personal computers, laptops, mobile telephones, smart phones, tablets or any other such mobile device, personal digital assistants, PDA telephones employed for the sue of and access to the Website and participation in the Services.</p>

            <p>2.1.4 <b>American Roulette, Us or We</b>: Onisac Limited, an online gaming operator</p>

            <p>2.1.5 <b>American Roulette Group</b>: American Roulette, any subsidiary or parent company of American Roulette, or any subsidiary of a parent company of American Roulette.</p>

            <p>2.1.6 <b>Player</b>: A person who has a Player Account and who uses the Services.</p>

            <p>2.1.7 <b>Player Account</b>: an account with American Roulette on the Website.</p>

            <p>2.1.8 <b>Representatives</b>: representatives, directors, agents and employees.</p>

            <p>2.1.9 <b>Service</b> or <b>Services</b>: All games, services and any related content or Software, whether or not in downloadable format, accessible or otherwise used by you through the Website and allowing you to participate in the services provided by American Roulette. The Services contains American Roulette’s own proprietary content as well as content of third party providers.</p>

            <p>2.1.10 <b>Software</b>: The software licensed by us including all programs and databases and any other derived content, requiring download, accessible or otherwise used by you through the Website and allowing a Player to play online games.</p>

            <p>2.1.11 <b>Terms and Conditions</b>: these terms and conditions.</p>

            <p>2.1.12 <b>Website</b>: <a href="http://amirza.techlaunch.online/Roulette">www.American-Roulette.com</a></p>

            <p>2.2 In these Terms and Conditions, unless the context requires differently:</p>

            <p>2.2.1 References to these Terms and Conditions include references to any amended Terms and Conditions, which supersede these Terms and Conditions;</p>

            <p>2.2.2 Unless otherwise stated, in case of conflict between these Terms and Conditions and any other document referred to in these Terms and Conditions, these Terms and Conditions will prevail;</p>

            <p>2.2.3 References to American Roulette or any American Roulette Group company shall be deemed to include their respective successors, beneficiaries or transferees;</p>

            <p>2.2.4 Section headings are for reference only and shall not affect the interpretation of these Terms and Conditions;</p>

            <p>2.2.5 References to a "person” include any individual, company, partnership, joint venture, association, organization, institution, trust or agency, having a distinct legal character;</p>

            <p>2.2.6 References to gender include every gender and references to the singular include the plural and vice versa;</p>

            <p>2.2.7 References to servers or "our server" or “our servers”, if appropriate, include a reference to a third-party server or servers used to provide the Services or Website;</p>

            <p>2.2.8 Any sentence introduced by the words "comprising" or "including" or a similar expression is indicative and does not limit the meaning of words that follow, and will be considered "without limitation”.</p>

            <p>3. <b>ACCEPTANCE OF TERMS AND CONDITIONS</b></p>

            <p>3.1 By registering an Account with American Roulette, you confirm that you have read and understood these Terms and Conditions, which may be modified from time to time, and acknowledge that they will govern your use of the Services.</p>

            <p>3.2 You acknowledge that these Terms and Conditions incorporate the:</p>

            <p>3.2.1 House Betting Rules;</p>

            <p>3.3 Should there be any conflict between the Terms and Conditions and the House Betting Rules the order of precedence shall be as follows:</p>

            <p>3.3.1 the Terms and Conditions; and</p>

            <p>3.3.2 the House Betting Rules.</p>

            <p>3.4 The Agreement applies to the usage of the Services and comes into force as soon as you tick the acceptance box during the registration process and create your Player Account. Ticking this box confirms to us that you have read, understood and accept these Terms and Conditions You certify that you are of legal age for gambling in the country from which you are accessing the Services</p>

            <p>3.5 By using the Services, you agree to the Terms and Conditions. Any material changes to the Terms and Conditions will be communicated in writing, and accepted by you before such changes are implemented.</p>

            <p>3.6 For information purposes, ease of understanding and ease of access by the Player these Terms and Conditions may be published in several languages. Each and every version will contain the same principles however it is only the English version that shall govern the legal relationship between you and us. Should any form of discrepancy arise between the non-English and the English version of these Terms and Conditions, the English version shall prevail over the non-English version.</p>

            <p>3.7 Any rights not expressly granted in these Terms and Conditions are reserved.</p>

            <p>3.8 Gambling services provided by American Roulette via the Website is licensed and regulated by the Gibraltar Gambling Commissioner, under Remote Gambling Licence No. 053.</p>

            <p>3.9 If you do not entirely agree with these Terms and Conditions, you should immediately cease to use the Services.</p>

            <p>4. <b>MODIFICTION TO THE TERMS AND CONDITIONS</b></p>

            <p>4.1 American Roulette reserves the right to amend, modify and update these Terms and Conditions the Bonus Policy, the Withdrawal Policy, the House Betting Rules and Privacy Policy at any time. American Roulette also reserves the right to modify either partially or completely the terms of any promotion. In the event the Terms and Conditions undergo a material change, a notification prior to such a change will be issued to the Player. On issuing such a notification the Player will have to accept the new terms and conditions before being able to access our Services again.</p>

            <p>4.2 Continued use, access to and participation in the Services through the Website or any Devices after such notification shall constitute your acceptance of the update Terms and Conditions, Bonus Policy, Withdrawal Policy, Privacy Policy and House Betting Rules.</p>

            <p>4.3 These Terms and Condition represent the entire Agreement and understanding between you and us and cannot be modified except as expressly provided in clause 4.1 above. For the avoidance of doubt this expressly excludes any variation or change to these Terms and Conditions given orally. By chat, SMS, email or other such means inadvertently or otherwise by our individual customer service representative or any other American Roulette representative.</p>

            <p>4.4 American Roulette’s right to amend, modify and update these Terms and Conditions as provided in clause 4.1 includes the right to novate it to a company in the American Roulette Group as part of a corporate restructuring or reorganisation.</p>

            <p>5. <b>OPENING AN ACCOUNT </b></p>

            <p>5.1 In order to play with American Roulette and to use the Services, you must complete the application for account opening and membership in the manner set out on the Website (“Membership Application”).</p>

            <p>5.2 By agreeing to these Terms and Conditions, you agree and declare that you have entered your own correct personal details, and that the source of all funds used on the Website are derived from legal activities and that you will not use the Website for illegal or fraudulent activity, including (and without limitation) money laundering as provided by the governing law that applies to You and/or any American Roulette Group company.</p>

            <p>5.3 A person cannot request to open a Player Account or hold a Player Account if such person will not be the Player Account holder or if they are acting on behalf of a third party.</p>

            <p>5.4 You are allowed to open only one Player Account on the Website, and American Roulette reserves the right to close all multiple Player Accounts that are open, under the same name or connected to the same person. If a person has opened multiple Player Accounts on the Website, American Roulette will have the right to take any action permitted under these Terms and Conditions, including that American Roulette may credit the first Player Account that the Player opened with American Roulette with the balances from the other Player Accounts that would have been closed. If American Roulette has reasonable grounds to believe that the Player has committed or attempted to commit any fraud, American Roulette reserves the right to cancel any transaction pertaining to it, without prejudice to any other action, or to terminate this Agreement.</p>

            <p>5.5 We reserve the right to reject your Membership Application and a Player Account may be closed, at American Roulette's sole discretion. Subject to these Terms and Conditions, including those terms which permit American Roulette to withhold payment of winnings, any contractual obligations of either a Player or American Roulette which have been made prior to a Player Account being closed will be honoured.</p>

            <p>5.6 A Player must not authorise any third party to use their Player Account but a Player will be entirely responsible for all losses which are incurred as a result of having a third party use their Player Account. The Player must immediately inform American Roulette if they suspect that another person has obtained access to their Player Account, and the Player will offer their full support to American Roulette while investigating this issue.</p>

            <p>5.7 The Player must not request or create a Player Account if they are in a jurisdiction in which the application for the opening of a Player Account and / or the use of our Services is illegal or against the law. It is the Player's responsibility to ensure that this is not the case. American Roulette reserves the right to suspend and/or terminate a Player's Account immediately if American Roulette discovers that the Player's Account has been opened in a country where it is illegal to access the Services.</p>

            <p>5.8 None of the executives, managers, directors, employees, consultants, or agents in American Roulette, a American Roulette Group company or affiliated companies, nor their relatives (in this clause, the term "relatives" means spouse, partner, parents, children or siblings of the people mentioned above) are authorised to open or hold a Player Account or use the Service directly or indirectly. If this clause is breached, American Roulette reserves the right to close said Player Account immediately, void any Bets and to cancel payments on any win.</p>

            <p>6. <b>PLAYER'S PERSONAL INFORMATION </b></p>

            <p>6.1 The personal information that American Roulette may request for registration includes but is not limited to: first name, surname, date of birth, home address, e-mail address, telephone number, language, currency for any deposits or withdrawals or ID card number.</p>

            <p>6.2 It is the Player's responsibility to ensure that all information provided to American Roulette is accurate, precise and up to date.</p>

            <p>6.3 It is the responsibility of the Player to protect their bank card against loss or theft, and the Player should immediately contact American Roulette customer services if the card is lost or stolen.</p>

            <p>6.4 Your username must not be obscene, threatening, racist, offensive, derogatory, defamatory or infringe any intellectual property right or property right of a third party. If at American Roulette’s discretion, your username is considered to be inappropriate you will be asked by customer services to change it. Should you refuse this request American Roulette reserves the right to terminate your Player Account.</p>

            <p>6.5 American Roulette presumes that all transactions are made by the rightful owner of the Player Account and are therefore valid. In no case is American Roulette liable for losses incurred by the Player due to unauthorised use or misuse of their personal details.</p>

            <p>6.6 American Roulette will use strict security measures in order to protect Players’ personal information against unauthorised access. The Player is solely responsible for securing their username and password and all actions that take place because of access to the Service via your user name and password.</p>

            <p>6.7 Your personal data shall be kept confidential and will be processed in accordance with our Privacy Policy. We will not disclose your personal date or betting information unless compelled to do so by any applicable laws, regulations, court orders or by the relevant gambling authorities. We reserve the right to disclose your personal data to our payment services providers and financial institutions to the extent necessary for completion of payments for the Services.</p>

            <p>6.8 Cookies are also used on the Website to provide fast and efficient service and allow you to make use of the Website and Services effectively.</p>

            <p>6.9 Additional information about the use of the Player’s personal information by American Roulette can be found in our Privacy Policy.</p>

            <p>7. <b>LICENCE TO USE THE SERVICES </b></p>

            <p>7.1 We hereby grant you a personal non-exclusive, non-transferable licence to use the Services in accordance with these Terms and Conditions and subject to the following conditions:</p>

            <p>7.1.1 You are at least 18 years of age, or the legal age required by the governing laws in the country where you reside, and that you are able to assume responsibility for your actions;</p>

            <p>7.1.2 All information included in the registration form submitted to American Roulette is true, accurate, complete, and corresponds to the name(s) appearing on the bank cards used for the deposits and payments of winnings. We reserve the right to close your Player Account in the event that the information provided to American Roulette is found to be false, inaccurate, deceitful or incomplete. It is your responsibility to inform us of any changes regarding the information you provided us with as soon as possible;</p>

            <p>7.1.3 The use of the Services is a right that is bestowed upon you personally to play games of chance on the internet. This right is given to you with a personal and not a commercial purpose;</p>

            <p>7.1.4 You may not under any circumstance authorise a third party to use your Player Account, your password or your identity to access the Services;</p>

            <p>7.1.5 You understand the rules and procedures of all games offered on the Website;</p>

            <p>7.1.6 It is your responsibility to note the payout rate or odds that apply to each game before you place a Bet and you acknowledge that payout rates and odds change from time to time;</p>

            <p>7.1.7 We reserve the right not to release any funds suspected to be connected to or proceeding from crime to you;</p>

            <p>7.1.8 You acknowledge that it is strictly forbidden to post or transmit to the Website and or Devices or to any other Players any unlawful, harassing, abusive, threatening, libellous, defamatory, obscene, indecent, inflammatory, racially or ethnically objectionable, pornographic or profane material, or any material that could constitute or encourage conduct that would be considered a criminal offence, give rise to civil liability, or otherwise violate any law;</p>

            <p>7.1.9 You will not create or provide any means (including, without limitation, via emulators) through which the Software may be used by others.</p>

            <p>7.1.10 You acknowledge that when playing games of chance through the use of the Services means that you are at risk of losing money. It is your sole responsibility to assume the losses suffered through your Player Account;</p>

            <p>7.1.11 You acknowledge that our Services are consumed instantly when playing. Thus, we cannot provide returns of goods or refunds or, subject to any terms to the contrary, cancellation of your Bets once they have been placed. If you play a game on the Website with real money, the money will be drawn from your Player Account instantly;</p>

            <p>7.1.12 You certify that you will not violate or attempt to violate or manipulate American Roulette’s security measures in any way. If American Roulette has reasonable suspicion with respect to this clause, American Roulette reserves the right to suspend or terminate your Player Account immediately, to not credit you with the amount due on your Player Account, and to deny you access to the Website (and all other websites) and Services offered by Us;</p>

            <p>7.1.13 You certify that in relation to the Services, you will not use or attempt to use any martingale betting strategy or software endowed, in our view, with artificial intelligence;</p>

            <p>7.1.14 You acknowledge that in the event that American Roulette reasonably determines that you used or attempted to use a product endowed with artificial intelligence in conjunction with our Services, that American Roulette has the right to suspend or terminate your Player Account immediately, to not reimburse the amount credited to your Player Account, and prohibit your access to the Website, ( and all other websites) and Services offered by us;</p>

            <p>7.1.15 You acknowledge that it is strictly forbidden for a Player to sell, transfer and/or acquire Accounts to/from another Player or transfer funds from their Account to another Player’s Account;</p>

            <p>7.1.16 We only allow access to the Services through secured networks using encryption of the username and password. You cannot play and bet without passing our customer security login;</p>

            <p>7.1.17 You will not attempt to use any techniques designed to hide or mislead as to your IP or true location.</p>

            <p>7.2 Upon termination of this Agreement, the licence issued pursuant to clause 7.1 shall be automatically revoked and you shall stop using the Software and shall uninstall the Software from your Device.</p>

            <p>8. <b>IDENTIFICATION AND AGE VERIFICATION</b></p>

            <p>8.1 If you are under 18 years of age, you cannot use the Website and the Services.</p>

            <p>8.2 You can only use the Websites and the Services if you are at minimum the legal age for gambling in your jurisdiction.</p>

            <p>8.3 American Roulette reserves the right to request proof of age and identity of a Player, at any time, in order to prevent the access of the Website by minors. Any Player who registers on the Website must provide a valid form of identification, address, email address and telephone number.</p>

            <p>8.4 By registering an Account and agreeing to these Terms and Conditions, you authorise us to verify and confirm your identity and age.</p>

            <p>8.5 In order to verify a Player’s identity and to ensure that they are of legal age for gambling, we will carry out regular checks.</p>

            <p>8.6 Where these checks are unable to verify that any customer is 18 or over, American Roulette reserves the right to ask for proof of age.</p>

            <p>8.7 Your age must be verified in order to ensure you are of legal age for gambling. If we are not able to successfully verify your age:</p>

            <p>8.7.1 your Player Account will be frozen;</p>

            <p>8.7.2 all funds in the Player Account will be withheld, and;</p>

            <p>8.7.3 no further gambling activity will be allowed.</p>

            <p>8.8 If on completion of the age verification process you are found to be underage, all deposits made on the Player Account will be returned, and the winnings and/or bonuses will be voided.</p>

            <p>8.9 If we remain unable to verify your age through our regular checks, we will send an email to your registered email address requesting a copy of one of the following documents: birth certificate, driving licence, passport, signed credit agreement, citizen/national identity card.</p>

            <p>8.10 In addition, you agree that if American Roulette (in its absolute discretion) requires further verification of your identity that American Roulette can send an email to your registered email address, requesting copies of two of the following documents, one of which must show your date of birth: birth certificate, driving license, passport, signed credit agreement, national identity card, utility bill or bank statement (less than 3 months old), which will need to be provided to American Roulette in order to complete American Roulette’s verification process. If such documents are requested, no withdrawals may be made until such documents have been provided to American Roulette.</p>

            <p>8.11 To be approved, all documents must be in acceptable condition (as decided by American Roulette in its discretion) and be readable. Your Player Account username must be included in the communication, to ensure the check is completed promptly.</p>

            <p>9. <b>FURTHER CONDITIONS OF USE </b></p>

            <p>9.1 You warrant:</p>

            <p>9.1.1 that you are acting on your own behalf; and</p>

            <p>9.1.2 you are not depositing money originating from criminal or other illegal or unauthorised activities.</p>

            <p>9.2 You agree that we or a payment processing company on our behalf will handle all financial transactions (“Payment Processor”). You agree that the Payment Processor reserves the right to withhold any payments should the Payment Processor have reason to believe or any suspicion that you may be engaging in or have engaged in fraudulent, collusion, unlawful or improper activity.</p>

            <p>9.3 You accept that you are solely responsible for the supply and maintenance of all the computer equipment and telecommunication network and internet access services that you need to use in order to access the Services. We will not be liable for any loss caused to you by any failure of your computer equipment, telecommunications network and/or internet access.</p>

            <p>9.4 You warrant you will not commit any acts or display any conduct that damages American Roulette or any American Roulette Group company’s reputation.</p>

            <p>9.5 You warrant you are not colluding or attempting to collude in any collusion scheme with any other Player in the course of Betting.</p>

            <p>9.6 You warrant are not a Politically Exposed Person (“PEP”) nor do you appear on any international Sanction List.</p>

            <p>10. <b>OUR RIGHTS AND RESPONSIBILITIES </b></p>

            <p>10.1 American Roulette is not responsible for the potential access to a Player’s Account by a third party and will not be held responsible for any potential loss suffered due to the illicit use of a Player’s password by a third party without authorised access, and/or for any transaction in which the name and password of a Player were registered correctly.</p>

            <p>10.2 We will use your personal data to allow you to use the Services and to carry out operations relevant to your participation in the Services. We may also use your personal data to inform you of changes, new services and promotions that we think you may find interesting. If you do not wish to receive such direct marketing data, you may opt out of such a service. American Roulette will not exchange and/or distribute email addresses or a Player’s personal information with third parties.</p>

            <p>10.3 American Roulette reserves the right, at its sole discretion, to report any suspicious transaction and to transmit any information to the appropriate authorities and without notice to you. In such a case, you waive all rights of any nature that may be recognised anywhere of the communication of such information. In addition, American Roulette reserves the right to withhold all the funds American Roulette believes to be derived from cheating, fraudulent or unlawful activity and where required, without giving reason to you for withholding said funds.</p>

            <p>10.4 American Roulette reserves the right, at its sole discretion, to suspend, modify, end, revoke the use of and/or add elements to its Services, either temporarily or permanently, at any time without notice or compensation, subject to compliance with its regulatory obligations and subject to fulfilling all other commitments made under these Terms and Conditions.</p>

            <p>10.5 We reserve the right to make enquires about you, including credit checks with third party credit and financial institutions. We also reserve the right to request information on source of funds.</p>

            <p>11. <b>FORBIDDEN JURISDICTIONS</b></p>

            <p>11.1 Certain countries have not addressed the legality of games of chance on the internet, and others have specifically determined that such games are illegal. The use of the Services is in no way meant to be used by people who are forbidden by law to use it. The availability of the Services shall not be interpreted as an offer or invitation on our part to use the Services in a country where such use is illegal.</p>

            <p>11.2 By accessing the Services, you confirm that you are not located in a country where it is illegal to play games of chance on the internet. American Roulette will expressly not accept Players from the following countries: Afghanistan, Antigua and Barbuda, Australia, Austria, Belgium, Bolivia, Bosnia-Herzegovina, Bulgaria, Burundi, Cambodia, Central African Rep, China, Colombia, Congo, Cyprus, Czech Republic, Ecuador, Egypt, Eritrea, Estonia, Ethiopia, France, Gaza Strip, Greece, Guatemala ,Guinea Bissau, Haiti, Hong Kong, Hungary, India, Indonesia, Iran, Iraq, Ireland, Israel, Japan, Korea, Lao People's Democratic Republic, Liberia, Libya, Lithuania, Macau, Malaysia, Mexico, Myanmar, Netherlands, Netherlands Antilles, Nicaragua, Nigeria, North Korea, Pakistan, Philippines, Poland, Portugal, Romania, Russia, Serbia, Sierra Leone, Slovakia, Slovenia, Somalia, South Sudan, Spain, Sudan, Syria, Tajikistan, Thailand, the Democratic Republic, Turkey, Turkmenistan, Uganda, Ukraine, United States of America, Vanuatu, Venezuela, Vietnam, West Bank (Palestinian Territory Occupied territory), Yemen, Kyrgyzstan, in addition residents of Singapore shall be blocked from accessing the Website(s) in their entirety.</p>

            <p>11.3 American Roulette reserves the right to suspend a Player Account if it is used to access the Website from a country where it is illegal to play games of chance on the internet or which is listed in clause 11.2.</p>

            <p>11.4 You are entirely responsible for informing yourself of the laws in your jurisdiction in respect of the use of the Services.</p>

            <p>12. <b>RESPONSIBLE GAMBLING </b></p>

            <p>12.1 American Roulette is committed to providing a safe and responsible platform where Players can use the Services. American Roulette is fully committed to help Players who show potential signs of problem gambling behaviour, or help Players that may be at risk of potentially becoming addicted in order to help face their problems and obtain the necessary advice and assistance that may be required.</p>

            <p>12.2 American Roulette offers the following</p>

            <p>(a) Account limits – you can set daily, weekly, or monthly deposit limits. Any Account limit set will only apply on your use of the Services of this Website, and not to any other American Roulette Group Player Accounts you may hold.</p>

            <p>(b) Reality Check – our “reality check” feature allows you to receive a reminder when you have been playing for a pre-set period of time.</p>

            <p>(c) Time Out - if you wish to restrict your gambling for a short period of time (up to 6 weeks), you can do so by following our time out procedure on our Responsible Gaming page. On completion of this process, we will temporarily close your account and you will not be able to access it. You can "Time out" for 24 hours, one week, one month or any other reasonable amount of time up to 6 weeks. On completion of this period your account will be automatically re-opened and you can resume playing. Any Time Out set will only apply on your use of the Services of this Website, and not to any other American Roulette Group Player Accounts you may hold.</p>

            <p>(d) Self-Exclusion - If you wish to restrict your gambling, you can do so by following our self-exclusion procedure. On completion of this process, we will close your account and return any outstanding balance to you. Any outstanding Bets that have already been placed shall be voided and your stakes will be returned. You can close an account or self-exclude for a minimum of six months and a maximum of 5 years. If you elect to self-exclude, your account may not be opened or utilised during the period of self-exclusion. During the exclusion period, all efforts will be made to exclude you from betting. However, you must not attempt to Bet with us, and we cannot be responsible or liable for any subsequent consequences or losses (howsoever caused) that you may suffer or incur if you continue gambling through additional accounts where you have altered any of your registration details or you provide misleading, inaccurate or incomplete details or otherwise seek to circumvent the self-exclusion. We will not reopen any self-excluded account but, after the expiry of the exclusion period, you may telephone us to open your account. We will provide you with a 24-hour cooling off period, during which you may elect to keep the exclusion in place.</p>

            <p>12.3 For further details on our gambling management tools, time out and self-exclusion please see our Responsible Gaming Page.</p>

            <p>12.4 Our Responsible Gaming page also contains guidance on how to ensure underage persons are prevented from accessing the Services.</p>

            <p>13. <b>DEPOSITS </b></p>

            <p>13.1 Please visit our deposits page for details on how to make deposits.</p>

            <p>14. <b>WITHDRAWALS</b></p>

            <p>14.1 Please see our Withdrawal Policy for information in relation to your withdrawals.</p>

            <p>15. <b>BET ACCEPTANCE AND WINNINGS </b></p>

            <p><b>Bet Acceptance and Disconnection</b></p>

            <p>15.1 Bets will be validly placed if your username and password have been entered correctly, subject to there being sufficient funds in your Player Account.</p>

            <p>15.2 It is your sole responsibility to ensure the details of your Bets are correct. Once your Bet has been accepted and acceptance of the Bet is confirmed by American Roulette, it cannot be revoked, cancelled or changed.</p>

            <p>15.3 Bets bet will be deemed valid and accepted by American Roulette once the stake has been selected and you click on the Bet confirmation button. The Bet details/outcome will be available and displayed on screen in the Player Account history section.</p>

            <p>15.4 All Bets are logged and recorded in the transaction log database.</p>

            <p>15.5 In respect of any Bet, the decision of American Roulette is final. If you wish to dispute our decision, please see clause 17 for our complaints procedure.</p>

            <p>15.6 You acknowledge that our Random Number Generator (RNG) will determine the shuffling and dealing of cards, the outcome of the games and other randomly generated processes that are part of our Services. You agree that the outcome of the RNG is final.</p>

            <p>15.7 In the case of an interrupted or disconnected game: If a manifest error or mistake occurs or an incorrect participant is quoted for any event, all bets placed on that event shall be void. In the event of any malfunction to the CASINO.COM Software or Website(s), CASINO.COM reserves the right to void any and all bets placed.</p>

            <p><b>Winnings </b></p>

            <p>15.8 Your winnings are exclusive of the Bet amount.</p>

            <p>15.9 All winnings will be credited to your Player Account. If any funds are credited to your Player Account in error, American Roulette reserves the right remove such funds and void any transactions involving such funds, either at that time or retrospectively.</p>

            <p>15.10 Payment of any taxes, fees, charges and levies that may apply to your winnings under any applicable laws shall be your sole responsibility.</p>

            <p>16. <b>BONUS POLICY</b></p>

            <p>16.1 Please see our Bonus Policy for information in relation to bonuses and promotions.</p>

            <p>17. <b>CUSTOMER COMPLAINTS AND DISPUTES </b></p>

            <p>17.1 Player complaints are taken seriously at American Roulette.</p>

            <p>Making a complaint – First level</p>

            <p>17.2 If you have a complaint or are experiencing difficulty with the Services you can raise your complaint with the Customer Support team Please visit our Contact Us page for the ways you can contact us.</p>

            <p>17.3 Any complaint or claims of any nature, including with regard to the Player Account (gameplay, transactions or other matters) or Player Account balance, should be communicated to us as soon as possible by contacting our Customer Support team and no later than 6 months after the issue has occurred.</p>

            <p>17.4 American Roulette commits to respond to the complainants with the results of the inquiry within one month from the date of the lodgement of the complaint, and will endeavour to provide a prompt resolution of issues at hand.</p>

            <p>Referring a complaint – Second Level</p>

            <p>17.5 If for any reason you are not satisfied with how American Roulette has resolved your complaint, you may decide that the matter be referred to a dispute resolution service.</p>

            <p>17.6 Players car refer their complaints for adjudication to the Gibraltar Gambling Commissioner. Please use the following link to refer a complaint to the Gibraltar Gambling Commissioner: <a href="https://www.gibraltar.gov.gi/remotegambling/2126-the-gambling-commissioners-advice-to-complainants">https://www.gibraltar.gov.gi/remotegambling/2126-the-gambling-commissioners-advice-to-complainants</a>.</p>

            <p>17.7 If a Player submits a complaint or claim in accordance with clauses 17.5 to 17.7, American Roulette reserves the right at any time, without prior notice and without prejudice to any subsequent proceedings, to close the Player’s Account, deny access to all or part of the Services, and in particular to refuse to accept a Bet or transaction, or to withdraw promotional offers from American Roulette pending the conclusion of any proceedings.</p>

            <p>18. <b>PLAYER ACCOUNT CLOSURE AND SUSPENSION </b></p>

            <p>Closing your Player Account</p>

            <p>18.1 You can close your Player Account at any time. If you want to close your Player Account you should confirm in writing by email to our Customer Support team. Player Account closures shall take effect within 48 hours of American Roulette received the closure request.</p>

            <p>18.2 Upon closing your Player Account, subject to any other term, you can withdraw your balance in accordance with your Withdrawal Policy.</p>

            <p>Suspension of your Player Account</p>

            <p>18.3 Without restricting our ability to rely on other remedies that may be available to American Roulette, American Roulette reserves the right to close or suspend your Player Account and/or void any associated bets and/or withhold any amounts in your Player Account at its absolute discretion if we have reason to believe any of the following, that:</p>

            <p>18.3.1 you have more than one Player Account on the Website;</p>

            <p>18.3.2 you provided incorrect personal details while registering a Player Account, or you provide personal details belonging to another person;</p>

            <p>18.3.3 the name on your Player Account does not match the name on the credit or debit cards or other payment accounts used to Bet and deposit with American Roulette;</p>

            <p>18.3.4 you are not of legal age for gambling in your jurisdiction;</p>

            <p>18.3.5 you have allowed, intentionally or unintentionally, another person to use your Player Account or you have otherwise misused your Player Account;</p>

            <p>18.3.6 you have played in tandem with other Players as part of a club, group, etc., or placed bets in a coordinated manner with other Players involving the same selections;</p>

            <p>18.3.7 American Roulette receives a “charge back” and/or a "return" notification via a deposit mechanism used on your Player Account;</p>

            <p>18.3.8 you are found colluding, cheating, money laundering or undertaking any kind of fraudulent activity;</p>

            <p>18.3.9 it is determined that you have employed or made use of a system (including machines, computers, software or other automated systems such as bots etc) designed specifically to defeat the gaming system on the Services, or have employed betting techniques with the aim of circumventing the standard house edge in the games on the Services;</p>

            <p>18.3.10 you are acting other than on your own behalf or otherwise in concert with others or engaging in illegal or fraudulent activity while interacting with the Services;</p>

            <p>18.3.11 you have breached any of these Terms and Conditions;</p>

            <p>18.3.12 you are acting in a manner that is detrimental to the conduct of our business;</p>

            <p>18.3.13 you have acknowledged that you are, or we reasonably believe you to be suffering from a problem related to gambling addiction;</p>

            <p>18.3.14 it is illegal for you to interact with the Services in any way;</p>

            <p>18.3.15 we are unable to verify your registered address or contact telephone number;</p>

            <p>18.3.16 there has been an abuse of a promotion; bonuses or any other offers promoted by us;</p>

            <p>18.3.17 American Roulette is required to do so by law;</p>

            <p>18.3.18 there is an ongoing dispute between American Roulette and the Player;</p>

            <p>18.3.19 you are found to be a PEP or appear on a Sanction List;</p>

            <p>18.4 Immediately following the cancellation of this Agreement by either party, American Roulette will return the amount in your Player Account subject to any withdrawal fees.</p>

            <p>18.5 All information collected during the registration process is kept even after a Player Account is closed. This information is kept for regulatory purposes, the prevention of fraud and money laundering. American Roulette reserves the right to cooperate fully with law enforcement and justice and any other official authority for any investigation of illegal activity on the Website.</p>

            <p>18.6 Upon termination of your account, you agree and acknowledge that your rights to use the Website or the Services shall immediately terminate.</p>

            <p>18.7 Your sole remedy in the event of termination of your Account by us for any reason related to clauses 18.3.1 to 18.3.19 shall be the re-imbursement of any undisputed Player Account balance you may then have and we shall have no further liability to you whatsoever.</p>

            <p>19. <b>DORMANT ACCOUNTS </b></p>

            <p>19.1 "Dormant" Player Accounts are defined as Player Accounts which are not accessed by you and used for real money Betting for any consecutive period of 180 days.</p>

            <p>19.2 Once your Player Account has been deemed Dormant we will be entitled to charge you an administrative fee equivalent to 5% of your total account balance ("Administration Fee"). The minimum deduction amount is $15 or currency equivalent and the maximum deduction amount is $500 or currency equivalent. We will deduct the Administration Fee from your Player Account balance every thirty (30) days from the moment your account has become dormant. You will be given 30 days written notice by email of the fact that your account is about to become dormant and subjected to Administration Fees.</p>

            <p>19.3 We will stop deducting the Administration Fee from your Player Account balance if your Player Account is re-activated by you using it for real money Betting.</p>

            <p>19.4 Once your Player Account reaches zero and/or a negative balance as a result of the deductions of the Administration Fee then your Player Account will be closed.</p>

            <p>19.5 Even if you do not choose to re-activate your Player Account, you may contact customer services at any time requesting to retrieve your balance.</p>

            <p>19.6 Should your Player Account remain Dormant and not be accessed by you and used for real money Betting for any consecutive period of 180 days from becoming Dormant and where your account also has a balance, we shall continue to contact you with a view to returning any remaining funds. Should this not be possible, then the remaining balance in that Account will be removed at the end of this further period of 1 year in total from becoming Dormant and the Account closed.</p>

            <p>20. <b>INDEMNITY</b></p>

            <p>20.1 By accepting these Terms and Conditions, you agree to indemnify us, to defend us and to exonerate American Roulette, each American Roulette Group company or their Representatives on demand in respect of any claim, damage, loss (whether direct or indirect), loss of reputation, loss of profits, cost or expense suffered by American Roulette, any American Roulette Group company or their Representatives, including but not limited to all legal fees, in relation to:</p>

            <p>20.1.1 any breach by you of these Terms and Conditions, rights of a third party or any law or regulation;</p>

            <p>20.1.2 your access to the Website;</p>

            <p>20.1.3 Betting or any other use of the Services (by you or another person);</p>

            <p>20.1.4 download and installation of the Software on any Devices;</p>

            <p>20.1.5 any action / legal proceedings, claims, demands, or complaints made by a third party against American Roulette or any American Roulette Group company resulting from any breach by you of these Terms and Conditions and/or any relevant laws or rights of third parties;</p>

            <p>20.1.6 your fraud, dishonesty or criminal act.</p>

            <p>21. <b>INTELLECTUAL PROPERTY RIGHTS </b></p>

            <p>21.1 All rights, trademarks, patents and other intellectual property rights on any material or content (including but not limited to, software, data, applications, information, text, photographs, music, sounds, videos, graphics, logos, symbols, artwork and other material or moving images) contained on the Website ("<b>Content</b>") belong to American Roulette or have been granted for our benefit by the owners of the rights as part of the Service. No use of such Content and intellectual property rights relating thereto without the prior written consent and express consent of the owner is permitted. All rights are reserved.</p>

            <p>21.2 In particular, as regards the Content (in whole or in part) the Player is forbidden, to engage in prohibited activities listed below (collectively, "<b>Prohibited Acts</b>"):</p>

            <p>21.2.1 The sale, transfer, lease or subcontract of Content;</p>

            <p>21.2.2 To change, edit, modify, adapt or restructure the Content in any way;</p>

            <p>21.2.3 To copy, distribute, perform or attempt to access the source code of the Content for any purpose;</p>

            <p>21.2.4 To use the Website for any unlawful or illegal purposes or that in any way in breach of these Terms and Conditions.</p>

            <p>21.3 If the Player commits a Prohibited Act, the Player will be held entirely responsible for all damages, costs and expenses arising therefrom.</p>

            <p>21.4 The Player may copy the Content in an unaltered form for private use on their own personal computer, mobile phone or other access device, if and to the extent that such a copy is required for appropriate use of the Services.</p>

            <p>21.5 The Player shall inform American Roulette immediately if they are aware of any unauthorised use or copying of any Content or any part of the Website or any unauthorised access to any site or other unauthorised activities, including but not limited to, any Prohibited Act related to the Services by any person or entity. The Player agrees to provide American Roulette with all the assistance necessary for any search American Roulette carries out in accordance with information that the Player provides American Roulette with.</p>

            <p>22. <b>EXCLUSION OF WARRANTY</b></p>

            <p>22.1 You acknowledge that you have chosen to use the Services willingly and at your own risk and discretion.</p>

            <p>22.2 American Roulette offers the Services 'as is', with no warranties, assurance, commitments or any declaration explicit or implied, legal or other.</p>

            <p>22.3 American Roulette hereby excludes all terms, conditions, and warranties explicit or implied, including but not limited to implied warranties, commercial conditions, and/or matters of satisfactory quality, ability and adaptability to a specific end, completion or precision of service and of the application with regards to the failure to respect governing rules and laws.</p>

            <p>22.4 It remains your responsibility to protect your system from all computer viruses and American Roulette, under any circumstances, shall not be held responsible for any losses incurred in relation to any viruses. In case of viruses in our systems, we reserve the right to suspend the Services.</p>

            <p>22.5 We do not guarantee that:</p>

            <p>22.5.1 the Services are entirely secure and exempt from error;</p>

            <p>22.5.2 the Services are updated regularly;</p>

            <p>22.5.3 any defect in the Services are regularly corrected;</p>

            <p>22.5.4 that access to the Services will be uninterrupted;</p>

            <p>22.5.5 the Services are virus or bug free;</p>

            <p>22.5.6 the Services will be continually operational;</p>

            <p>22.5.7 that the Services are adequate;</p>

            <p>22.5.8 that the material on the Website or obtained via the Website, including results of matches, is adequate and reliable.</p>

            <p>22.6 American Roulette will not be held responsible for any act or omission by an internet service provider or of any other third party, including those with whom you may have contracted in order to have access to the Services. In case of litigation between the internet service provider and yourself, American Roulette cannot be a party to the suit, and such suit shall in no way affect the Player's obligations under this contract.</p>

            <p>22.7 In the event of errors relating to the generation or communication of any result, bet settlement or other element of the Services, including the random number generators used in certain games on the Services, we will not be liable to you as a result of any such errors and American Roulette reserves the right to void all Bets on the games affected and your Bet will be returned.</p>

            <p>22.8 Nothing in these Terms and Conditions will exclude or restrict American Roulette’s responsibility in any manner which is prohibited by relevant laws.</p>

            <p>23. <b>LIMITATION OF LIABILITY</b></p>

            <p>23.1 Nothing in these Terms and Conditions is intended to:</p>

            <p>23.1.1 exclude or limit our liability for fraud or for death or personal injury resulting from our negligence; or</p>

            <p>23.1.2 limit your statutory rights (statutory rights include, for example, that we will provide our Services to a reasonable standard and within a reasonable time).</p>

            <p>23.2 Except under Clause 23.1 above and save in respect of any winnings lawfully due to you in accordance with these Terms and Conditions, our maximum liability to you in relation to any one incident or series of related incidents is limited to the greater of:</p>

            <p>23.2.1 where such liability relates to a specific Bet, the value of such Bet paid by you;</p>

            <p>23.2.2 where such liability relates to the misapplication of funds in your Player Account, the amount that has been lost or misplaced; or</p>

            <p>23.2.3 ten thousand Pounds (£10,000).</p>

            <p>23.3 Subject always to Clauses 23.1 and 23.2, we will not be liable for any loss to you or a third party, that could not have been reasonably expected at the time you register or at the time you enter into a transaction for Services, such as any loss of income, business or profits or any information which is lost or corrupted, including but not limited to any damage or loss suffered or incurred by you as a result of:</p>

            <p>23.3.1 any use of our Services in breach of these Terms and Conditions (including any use of our Services for commercial or business purposes);</p>

            <p>23.3.2 failures caused by the equipment you use to access our Services, Website, call centre or mobile applications or failures in any network (including failures by your internet service provider);</p>

            <p>23.3.3 any incomplete, illegible, lost or delayed transactions (including as a result of technical failure);</p>

            <p>23.3.4 damage to your equipment (e.g. desktop, laptop, TV, mobile, smartphone, tablet, games console or other internet-enabled device) or for any loss or corruption of data that results from your use of our Website, Services or mobile applications (and we cannot and do not guarantee that any files that you download are free from viruses, contamination or destructive features);</p>

            <p>23.3.5 the accuracy, completeness or currency of any information services provided by us or third parties (including but not limited to prices, runners, times, results, live scores or general statistics);</p>

            <p>23.3.6 any loss whatsoever arising from your abuse or misuse of your Player Account or our Services;</p>

            <p>23.3.7 any failure on our part to interact with you where we may have concerns about your activities;</p>

            <p>23.3.8 any event outside our control or instances of force majeure;</p>

            <p>23.3.9 our closure or suspension of your Play Account in accordance with these Terms and Conditions;</p>

            <p>23.3.10 your use or a third party's use of the Services the Content or any link on the Website;</p>

            <p>23.3.11 any modification, suspension or interruption of Services; or</p>

            <p>23.3.12 any improper functioning of the Services.</p>

            <p>23.4 In the event that any malfunction results in profit, whether it is collected or credited to your Player Account, American Roulette reserves the right to claim all gains that you may have benefited from, as a result of one of those malfunctions, and you would be obliged to immediately reimburse American Roulette the amount collected and inform American Roulette of the malfunction. American Roulette reserves the right, at its sole discretion, to directly deduct an amount equal to that which you may have received in error from your Player Account.</p>

            <p>23.5 You acknowledge that in relation to the use of the Services that you will have no claims whatsoever against any Representatives of any American Roulette Group company.</p>

            <p>24. <b>GOVERNING LAW / JURISDICTION</b></p>

            <p>24.1 This Agreement, its interpretation and its execution, as well as all other legal relations between the parties to this contract, is subject to the laws of Gibraltar</p>

            <p>24.2 You hereby irrevocably submit to the non-exclusive jurisdiction of the courts of Gibraltar, provided always that such submission shall not affect the right of American Roulette to take such legal action or proceedings in any other jurisdiction, nor shall the taking of such legal action or proceedings in any jurisdiction preclude American Roulette from taking such action or proceedings in any other jurisdiction.</p>

            <p>25. <b>BREACH OF THESE TERMS AND CONDIITONS </b></p>

            <p>25.1 American Roulette reserves the right to seek all remedies available at law and in equity in respect of a breach of these Terms and Conditions.</p>

            <p>26. <b>LINKS TO EXTERNAL WEBSITES </b></p>

            <p>26.1 The Website may contain links to external websites outside the Website which are not maintained by American Roulette. Links to external websites are provided for your convenience only, and American Roulette is not responsible for and does not undertake to ensure that contents of such links are accurate, current or maintained.</p>

            <p>26.2 American Roulette does not approve or endorse, and makes no representations or warranties in respect of the contents or the privacy practices of the external websites, any products or services which may be advertised, sold or otherwise made available on such external websites.</p>

            <p>26.3 American Roulette shall not be liable in contract, tort, negligence, or otherwise, for any loss or damage whatsoever arising from or in any way connected with your use of any link to external websites provided on the Website.</p>

            <p>26.4 Unless expressly provided American Roulette shall under no circumstances be considered to be associated or affiliated with any statement, opinion, trade or service marks, logos, insignias or other devices appearing on external websites, or any products or services which may be advertised, sold or otherwise made available on external websites, or with the operators or owners of external websites or any person who may be related to any external websites in any manner whatsoever.</p>

            <p>27. <b>GENERAL</b></p>

            <p>27.1 Failure of American Roulette to exercise their rights under these Terms and Conditions does not constitute a general waiver of those rights.</p>

            <p>27.2 If any part of this Agreement is deemed invalid or unenforceable, then the invalid or unenforceable provision will be deemed superseded by a valid, enforceable provision that reflects as closely as possible the intent of the original provision and the remainder of this Agreement will continue to full effect.</p>

            <p>27.3 This Agreement and any documents referred to herein represent the entire agreement between American Roulette and you and supersede any prior agreement, understanding or arrangement, whether oral or in writing. We each acknowledge that we have not relied on any representation, undertaking or promise given by the other or implied from anything said or written in negotiations between us except as expressly stated in this Agreement.</p>
            <button class="abutton" id="accept">Accept</button>

            <br>
            <br>
            <br>
        </div>
        <div class="modal-footer">
            <h5>Last Updated on 26th January, 2019</h5>
        </div>
    </div>
</div>



<script>

    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

    var modal = document.getElementById('myModal');
    var btn = document.getElementById("myBtn");
    var accept = document.getElementById("accept");

    btn.onclick = function() {
    modal.style.display = "block";
    }

    accept.onclick = function() {
    modal.style.display = "none";
    }

    // window.onclick = function(event) {
    // if (event.target == modal) {
    //     modal.style.display = "none";
    // }
    // }

</script>

<?php include "partials/footer.php"; ?>