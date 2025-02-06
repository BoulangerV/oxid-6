<?php
/**
 * PAYONE OXID Connector is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * PAYONE OXID Connector is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with PAYONE OXID Connector.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.payone.de
 * @copyright (C) Payone GmbH
 * @version   OXID eShop CE
 */

$sLangName = "Deutsch";
// -------------------------------
// RESOURCE IDENTITFIER = STRING
// -------------------------------
$aLang = array(
    'charset'                                             => 'UTF-8',
    'FCPO_LOCALE'                                         => 'de_DE',
    'FCPO_IBAN_INVALID'                                   => 'Bitte geben Sie eine korrekte IBAN ein.',
    'FCPO_BIC_INVALID'                                    => 'Bitte geben Sie eine korrekte BIC ein.',
    'FCPO_BLZ_INVALID'                                    => 'Bitte geben Sie eine korrekte Bankleitzahl ein.',
    'FCPO_KTONR_INVALID'                                  => 'Bitte geben Sie eine korrekte Kontonummer ein.',
    'FCPO_ERROR'                                          => 'Es ist ein Fehler aufgetreten:<br>',
    'FCPO_PAY_ERROR_REDIRECT'                             => 'Die Zahlung wurde von Zahlungsanbieter abgelehnt! Bitte versuchen Sie es mit einer anderen Zahlart',
    'FCPO_ERROR_BLOCKED'                                  => 'Kontodaten inkorrekt.',
    'FCPO_CC_NUMBER_INVALID'                              => 'Bitte geben Sie eine korrekte Kreditkarten-Nummer ein.',
    'FCPO_CC_DATE_INVALID'                                => 'Bitte geben Sie ein korrektes Gültigkeits-Datum an.',
    'FCPO_CC_CVC2_INVALID'                                => 'Bitte geben Sie eine korrekte Prüfziffer an.',
    'FCPO_CC_CARDHOLDER'                                  => "Karteninhaber",
    'FCPO_CC_CARDHOLDER_HELPTEXT'                         => "Karteninhaber wie aufgedruckt",
    'FCPO_CC_CARDHOLDER_INVALID'                          => "Es sind nur A-Z, ÄÖÜ,ß und - erlaubt",
    'fcpo_so_ktonr'                                       => 'Kontonummer',
    'fcpo_so_blz'                                         => 'BLZ',
    'FCPO_MANIPULATION'                                   => 'Verdacht auf Manipulation',
    'FCPO_REMARK_APPOINTED_MISSING'                       => 'Der Shop hat den Transaktionsstatus APPOINTED nicht erhalten. Bitte prüfen Sie diese Bezahlung sorgfältig!',
    'FCPO_THANKYOU_APPOINTED_ERROR'                       => 'Es ist ein Problem im Bezahl-Prozess aufgetreten. Die Bestellung wird von uns gepr&uuml;ft und Sie werden gegebenenfalls kontaktiert.',
    'FCPO_CARDSEQUENCENUMBER'                             => 'Card Sequence Number',
    'FCPO_ONLINE_UEBERWEISUNG_TYPE'                       => 'Typ',
    'FCPO_BANKGROUPTYPE'                                  => 'Bankgruppe',
    'FCPO_BANKACCOUNTHOLDER'                              => 'Kontoinhaber',
    'FCPO_VOUCHER'                                        => 'Gutschein',
    'FCPO_DISCOUNT'                                       => 'Rabatt',
    'FCPO_WRAPPING'                                       => "Geschenkverpackung",
    'FCPO_GIFTCARD'                                       => "Grußkarte",
    'FCPO_SURCHARGE'                                      => 'Aufschlag',
    'FCPO_DEDUCTION'                                      => 'Abschlag',
    'FCPO_PAYMENTTYPE'                                    => "Zahlungsart",
    'FCPO_SHIPPINGCOST'                                   => "Versandkosten",
    'FCPO_BANK_COUNTRY'                                   => 'Land der Bank',
    'FCPO_BANK_IBAN'                                      => 'IBAN',
    'FCPO_BANK_BIC'                                       => 'BIC',
    'FCPO_BANK_CODE'                                      => 'BLZ',
    'FCPO_BANK_ACCOUNT_NUMBER'                            => 'Kto.Nr.',
    'FCPO_BANK_GER_OLD'                                   => 'oder bezahlen Sie wie gewohnt mit Ihren bekannten Kontodaten<br>(nur für Deutsche Kontoverbindungen).',
    'FCPO_CREDITCARD'                                     => "Karte",
    'FCPO_CREDITCARD_CHOOSE'                              => "Bitte wählen",
    'FCPO_CARD_VISA'                                      => "Visa",
    'FCPO_CARD_MASTERCARD'                                => "Mastercard",
    'FCPO_NUMBER'                                         => "Nummer",
    'FCPO_FIRSTNAME'                                      => "Vorname",
    'FCPO_LASTNAME'                                       => "Nachname",
    'FCPO_BANK_ACCOUNT_HOLDER_2'                          => "Kontoinhaber",
    'FCPO_IF_DEFERENT_FROM_BILLING_ADDRESS'               => "Falls abweichend von der Rechnungsadresse.",
    'FCPO_VALID_UNTIL'                                    => "Gültig bis",
    'FCPO_CARD_SECURITY_CODE'                             => "Prüfziffer",
    'FCPO_CARD_SECURITY_CODE_DESCRIPTION'                 => "Diese befindet sich auf der Rückseite Ihrer Kreditkarte. Die Prüfziffer<br>sind die letzten drei Ziffern im Unterschriftsfeld.",
    'FCPO_TYPE_OF_PAYMENT'                                => "Zahlungsart",
    'FCPO_MIN_ORDER_PRICE'                                => "Mindestbestellwert",
    'FCPO_PREVIOUS_STEP'                                  => "Zurück",
    'FCPO_CONTINUE_TO_NEXT_STEP'                          => "Weiter zum nächsten Schritt",
    'FCPO_PAYMENT_INFORMATION'                            => "Bezahlinformation",
    'FCPO_PAGE_CHECKOUT_PAYMENT_EMPTY_TEXT'               => '<p>Derzeit ist keine Versandart für dieses Land definiert.</p> <p>Wir werden versuchen, Liefermöglichkeiten zu finden und Sie über die Versandkosten informieren.</p>',
    'FCPO_EMAIL_BANK_DETAILS'                             => 'Bankdetails',
    'FCPO_EMAIL_BANK'                                     => 'Bankname',
    'FCPO_EMAIL_ROUTINGNUMBER'                            => 'BLZ',
    'FCPO_EMAIL_ACCOUNTNUMBER'                            => 'Kto.Nr.',
    'FCPO_EMAIL_BIC'                                      => 'BIC',
    'FCPO_EMAIL_IBAN'                                     => 'IBAN',
    'FCPO_KLV_CONFIRM'                                    => 'Mit der Übermittlung der für die Abwicklung der gewählten Klarna Zahlungsmethode und einer Identitäts- und Bonitätsprüfung erforderlichen Daten an Klarna bin ich einverstanden. Meine <a target="_blank" style="text-decoration: underline;" href="https://cdn.klarna.com/1.0/shared/content/legal/terms/%s/%s/consent">Einwilligung</a> kann ich jederzeit mit Wirkung für die Zukunft widerrufen. Es gelten die AGB des Händlers.<br><br>Weitere Informationen zum Rechnungskauf finden Sie in den <a target="_blank" style="text-decoration: underline;" href="https://cdn.klarna.com/1.0/shared/content/legal/terms/%s/%s/invoice?fee=0">Rechnungsbedingungen</a>.',
    'FCPO_KLV_TELEPHONENUMBER'                            => 'Telefonnummer',
    'FCPO_KLV_TELEPHONENUMBER_INVALID'                    => 'Bitte geben Sie eine korrekte Telefonnummer ein.',
    'FCPO_KLV_BIRTHDAY'                                   => 'Geburtstag',
    'FCPO_KLV_BIRTHDAY_INVALID'                           => 'Bitte geben Sie ein korrektes Geburtsdatum ein.',
    'FCPO_KLV_ADDINFO'                                    => 'Zus. Info',
    'FCPO_KLV_ADDINFO_INVALID'                            => 'Bitte füllen Sie das Feld aus.',
    'FCPO_KLV_ADDINFO_DEL'                                => 'Zus. Info Lieferadresse',
    'FCPO_KLV_SAL'                                        => 'Anrede',
    'FCPO_KLV_PERSONALID'                                 => 'Personenkennziffer',
    'FCPO_KLV_PERSONALID_INVALID'                         => 'Bitte füllen Sie das Feld aus.',
    'FCPO_KLV_INFO_NEEDED'                                => 'Um den Kauf mit Klarna Rechnung durchführen zu können, benötigen wir noch ein paar Angaben von Ihnen.',
    'FCPO_KLV_CONFIRMATION_MISSING'                       => 'Sie müssen noch Ihr Einverständnis mit der Übermittlung der Daten erklären.',
    'FCPO_KLS_CHOOSE_CAMPAIGN'                            => 'Bitte w&auml;hlen Sie die entsprechende Kampagne',
    'FCPO_KLS_CAMPAIGN_INVALID'                           => 'Sie m&uuml;ssen eine Kampagne ausw&auml;hlen.',
    'FCPO_KLS_NO_CAMPAIGN'                                => 'F&uuml;r Ihre aktuelle Kombination aus Lieferland, Sprache und W&auml;hrung gibt es keine Ratenkauf-Optionen.<br>Bitte w&auml;hlen Sie eine andere Zahlart.',
    'FCPO_ORDER_MANDATE_HEADER'                           => 'SEPA-Lastschrift',
    'FCPO_ORDER_MANDATE_INFOTEXT'                         => 'Damit wir die SEPA-Lastschrift von Ihrem Konto einziehen können, benötigen wir von Ihnen ein SEPA-Lastschriftmandat.',
    'FCPO_ORDER_MANDATE_CHECKBOX'                         => 'Ich möchte das Mandat erteilen<br>(elektronische Übermittlung)',
    'FCPO_ORDER_MANDATE_ERROR'                            => 'Sie müssen das SEPA-Lastschriftmandat bestätigen.',
    'FCPO_THANKYOU_PDF_LINK'                              => 'Ihr SEPA-Mandat als PDF',
    'FCPO_MANAGEMANDATE_ERROR'                            => 'Es ist ein Problem aufgetreten. Bitte überprüfen Sie Ihre Eingaben oder wählen Sie eine andere Zahlart.',
    'FCPO_PAYPALEXPRESS_USER_SECURITY_ERROR'              => 'Bitte loggen Sie sich im Shop ein und führen Sie den PayPal Express Checkout nochmal durch. Ihre PayPal-Lieferadresse stimmt nicht mit den im Shop hinterlegten Adressdaten &uuml;berein.',
    'FCPO_CC_IFRAME_HEADER'                               => 'Bezahlung mit Kreditkarte',
    'FCPO_OR'                                             => 'oder',
    'FCPO_PAYOLUTION_USTID'                               => 'Umsatzsteueridentifikationsnummer (USt-IdNr.)',
    'FCPO_PAYOLUTION_PHONE'                               => 'Telefonnummer',
    'FCPO_PAYOLUTION_BIRTHDATE'                           => 'Geburtsdatum',
    'FCPO_PAYOLUTION_PRECHECK_FAILED'                     => 'Die Transaktion wurde vom Finanzierungs-Dienstleister abgelehnt. Bitte wählen Sie eine andere Zahlart',
    'FCPO_PAYOLUTION_PLEASE SELECT'                       => 'Bitte wählen...',
    'FCPO_PAYOLUTION_BIRTHDATE_INVALID'                   => 'Ihr Geburtsdatum wurde nicht korrekt eingegeben',
    'FCPO_PAYOLUTION_YEAR'                                => 'Jahr',
    'FCPO_PAYOLUTION_MONTH'                               => 'Monat',
    'FCPO_PAYOLUTION_DAY'                                 => 'Tag',
    'FCPO_PAYOLUTION_AGREEMENT_PART_1'                    => 'Mit der Übermittlung der für die Abwicklung %s und einer Identitätsprüfung und Bonitätsprüfung erforderlicher Daten bin ich einverstanden.<br>Meine',
    'FCPO_PAYOLUTION_AGREEMENT_PART_1_FCPOPO_DEBITNOTE'   => 'der Lastschrift',
    'FCPO_PAYOLUTION_AGREEMENT_PART_1_FCPOPO_INSTALLMENT' => 'des Ratenkaufes',
    'FCPO_PAYOLUTION_AGREEMENT_PART_1_FCPOPO_BILL'        => 'des Rechnungskaufes',
    'FCPO_PAYOLUTION_AGREEMENT_PART_2'                    => 'kann ich jederzeit mit Wirkung für die Zukunft widerrufen',
    'FCPO_PAYOLUTION_AGREE'                               => 'Einwilligung',
    'FCPO_PAYOLUTION_EMAIL_CLEARING'                      => 'Unzer Referenzcode',
    'FCPO_PAYOLUTION_NOT_AGREED'                          => 'Sie haben die Einwilligung zur Übertragung der erforderlichen Daten an Unzer nicht bestätigt.',
    'FCPO_PAYOLUTION_SEPA_NOT_AGREED'                     => 'Sie haben das SEPA Lastschriftmandat noch nicht erteilt.',
    'FCPO_PAYOLUTION_PHONE_MISSING'                       => 'Die Angabe der Telefonnummer wird benötigt.',
    'FCPO_PAYOLUTION_SEPA_AGREEMENT_PART_1'               => 'Hiermit erteile ich das',
    'FCPO_PAYOLUTION_SEPA_AGREE'                          => 'SEPA-Lastschriftmandat',
    'FCPO_PAYOLUTION_ACCOUNTHOLDER'                       => 'Kontoinhaber',
    'FCPO_PAYOLUTION_BANKDATA_INCOMPLETE'                 => 'Ihre eingebenen Kontodaten sind nicht vollständig.',
    'FCPO_PAYOLUTION_CHECK_INSTALLMENT_AVAILABILITY'      => 'Verfügbarkeit prüfen',
    'FCPO_PAYOLUTION_INSTALLMENT_SELECTION'               => 'Ratenkaufoptionen',
    'FCPO_PAYOLUTION_SELECT_INSTALLMENT'                  => 'Bitte w&auml;hlen Sie eine Ratenoption aus',
    'FCPO_PAYOLUTION_INSTALLMENT_SUMMARY_AND_ACCOUNT'     => 'Übersicht und Kontoinformationen',
    'FCPO_PAYOLUTION_PLEASE_CHECK_AVAILABLILITY'          => 'Bitte prüfen Sie zunächst die Verfügbarkeit der möglichen Ratenzahlungsoptionen',
    'FCPO_PAYOLUTION_INSTALLMENT_PER_MONTH'               => 'pro Monat',
    'FCPO_PAYOLUTION_INSTALLMENT_RATES'                   => 'Raten',
    'FCPO_PAYOLUTION_INSTALLMENT_RATE'                    => 'Rate',
    'FCPO_PAYOLUTION_INSTALLMENT_MONTHLY_RATES'           => 'Monatliche Raten',
    'FCPO_PAYOLUTION_INSTALLMENT_INTEREST_RATE'           => 'Nominalzins',
    'FCPO_PAYOLUTION_INSTALLMENT_EFF_INTEREST_RATE'       => 'Effektivzins',
    'FCPO_PAYOLUTION_INSTALLMENT_DUE_AT'                  => 'f&auml;llig am',
    'FCPO_PAYOLUTION_INSTALLMENT_DOWNLOAD_DRAFT'          => 'Vertragsentwurf herunterladen',
    'FCPO_PAYOLUTION_INSTALLMENTS_NUMBER'                 => 'Anzahl mögl. Ratenzahlungen',
    'FCPO_PAYOLUTION_INSTALLMENT_FINANCING_AMOUNT'        => 'Zu finanzierender Betrag',
    'FCPO_PAYOLUTION_INSTALLMENT_FINANCING_SUM'           => 'Total',
    'FCPO_PAYOLUTION_INSTALLMENT_NOT_YET_SELECTED'        => 'Bitte ausw&auml;hlen',
    'FCPO_PAYOLUTION_NO_INSTALLMENT_SELECTED'             => 'Sie haben keine Ratenkaufoption ausgewählt',
    'FCPO_PAYOLUTION_NO_USTID'                            => 'Bei Firmenbestellungen ist die Angabe der Umsatzsteueridentifikationsnummer (USt-IdNr.) notwendig',
    'FCPO_RATEPAY_FON'                                    => 'Telefonnummer',
    'FCPO_RATEPAY_BIRTHDATE'                              => 'Geburtsdatum',
    'FCPO_RATEPAY_USTID'                                  => 'Umsatzsteueridentifkiationsnummer (USt-IdNr.)',
    'FCPO_RATEPAY_NO_USTID'                               => 'Bei Firmenbestellungen ist die Angabe der Umsatzsteueridentifikationsnummer (USt-IdNr.) notwendig',
    'FCPO_RATEPAY_NO_SUFFICIENT_DATA'                     => 'Es fehlen einige persönliche Angaben zu Ihrer Person. Bitte füllen Sie die eingeblendeten Felder aus.',
    'FCPO_RATEPAY_ADD_TERMS1'                             => 'Mit Klicken auf "Zahlungspflichtig bestellen" erklären Sie sich mit den ',
    'FCPO_RATEPAY_ADD_TERMS2'                             => 'Zahlungsbedingungen unseres Zahlungspartners ',
    'FCPO_RATEPAY_ADD_TERMS3'                             => 'sowie mit der Durchführung einer ',
    'FCPO_RATEPAY_ADD_TERMS4'                             => 'Risikoprüfung durch unseren Zahlungspartner ',
    'FCPO_RATEPAY_ADD_TERMS5'                             => 'einverstanden.',
    'FCPO_AMAZON_SELECT_ADDRESS'                          => 'Adresse aus dem Amazon-Adressbuch auswählen',
    'FCPO_AMAZON_SELECT_PAYMENT'                          => 'Zahlungsart aus der Amazon-Brieftasche auswählen',
    'FCPO_AMAZON_LOGOFF'                                  => 'Den Amazon Pay Bestellprozess beenden und zurück zum Standard-Checkout',
    'FCPO_AMAZON_PROBLEM'                                 => 'Es gibt ein Problem',
    'FCPO_AMAZON_NO_SHIPPING_TO_COUNTRY'                  => 'Für das Land Ihrer angegebene Adresse existiert keine Versandmöglichkeit. Bitte klicken Sie <a href="index.php?cl=user" style="color:green;">hier</a> um zur Adressauswahl zurückzukehren.',
    'FCPO_AMAZON_THANKYOU_MESSAGE'                        => 'Ihre Zahlung mit Amazon Pay ist derzeit noch in Prüfung.Bitte beachten Sie, dass wir uns mit Ihnen in Kürze per Email in Verbindung setzen werden, falls noch Unklarheiten bestehen sollten.',
    'FCPO_AMAZON_ERROR_TRANSACTION_TIMED_OUT'             => 'Entschuldigung, die Transaktion mit Amazon Pay war nicht erfolgreich. Bitte wählen Sie eine andere Zahlart.',
    'FCPO_AMAZON_ERROR_INVALID_PAYMENT_METHOD'            => 'Entschuldigung, die Transaktion mit Amazon Pay war nicht erfolgreich. Bitte Überprüfen Sie Ihre Daten und wählen Sie eine anderen Zahlungsart.',
    'FCPO_AMAZON_ERROR_REJECTED'                          => 'Entschuldigung, die Transaktion mit Amazon Pay war nicht erfolgreich. Bitte wählen Sie eine andere Zahlart.',
    'FCPO_AMAZON_ERROR_PROCESSING_FAILURE'                => 'Entschuldigung, die Transaktion mit Amazon Pay war nicht erfolgreich. Bitte wählen Sie eine andere Zahlart.',
    'FCPO_AMAZON_ERROR_BUYER_EQUALS_SELLER'               => 'Entschuldigung, die Transaktion mit Amazon Pay war nicht erfolgreich. Bitte wählen Sie eine andere Zahlart.',
    'FCPO_AMAZON_ERROR_PAYMENT_NOT_ALLOWED'               => 'Entschuldigung, die Transaktion mit Amazon Pay war nicht erfolgreich. Bitte wählen Sie eine andere Zahlart.',
    'FCPO_AMAZON_ERROR_PAYMENT_PLAN_NOT_SET'              => 'Entschuldigung, die Transaktion mit Amazon Pay war nicht erfolgreich. Bitte wählen Sie eine andere Zahlart.',
    'FCPO_AMAZON_ERROR_SHIPPING_ADDRESS_NOT_SET'          => 'Bitte wählen Sie eine Adresse.',
    'FCPO_AMAZON_ERROR_900'                               => 'Entschuldigung, die Transaktion mit Amazon Pay war nicht erfolgreich. Bitte wählen Sie eine andere Zahlart.',
    'FCPO_AMAZON_LOGIN'                                   => 'Mit Amazon einloggen.',
    'FCPO_SECINVOICE_BIRTHDATE'                           => 'Geburtsdatum',
    'FCPO_SECINVOICE_BIRTHDATE_B2B'                       => 'Geburtsdatum des Bestellers',
    'FCPO_SECINVOICE_USTID'                               => 'Umsatzsteueridentifikationsnummer',
    'FCPO_SECINVOICE_NO_COMPANY'                          => 'Keine Firma? Klicken Sie <a href="index.php?cl=account_user" style="color:green;">hier</a> um Ihre Adresse zu ändern.',
    'FCPO_NOT_ADULT'                                      => 'Sie sind aufgrund Ihres Alters leider nicht berechtigt die gewählte Zahlart zu verwenden. Bitte wählen Sie eine andere Zahlart.',
    'FCPO_BIRTHDATE_INVALID'                              => 'Ihr Geburtsdatum wurde nicht korrekt eingegeben',
    'FCPO_CC_HOSTED_ERROR_CARDTYPE'                       => 'Bitte wählen Sie einen Kartentyp',
    'FCPO_CC_HOSTED_ERROR_CVC'                            => 'Bitte CVC-Eingabe überprüfen',
    'FCPO_CC_HOSTED_ERROR_INCOMPLETE'                     => 'Eingaben unvollständig',
    'FCPO_RATEPAY_AGREE'                                  => '<p>Im Rahmen des Bestellvorgangs übermitteln wir Ihre Daten zum Zwecke der Identitäts- und Bonitätsprüfung sowie der Vertragsabwicklung an RATEPAY. Es gelten die <a href="//ratepay.com/legal" title="Legal - Ratepay" target="_blank">zusätzlichen AGB für RATEPAY-Zahlungsarten und die Datenschutzhinweise der Ratepay GmbH</a> für SEPA-Lastschrift.</p>',
    'FCPO_RATEPAY_NOT_AGREED'                             => 'Sie haben die Einwilligung zur Übertragung der erforderlichen Daten an Ratepay nicht bestätigt.',
    'FCPO_RATEPAY_SEPA_NOT_AGREED'                        => 'Sie haben das SEPA Lastschriftmandat noch nicht erteilt.',
    'FCPO_RATEPAY_SEPA_AGREE'                             => '<p>Ich ermächtige die Ratepay GmbH, Zahlungen von meinem Konto mittels Lastschrift einzuziehen. Zugleich weise ich mein	Kreditinstitut an, die von der Ratepay GmbH auf mein Konto gezogenen Lastschriften einzulösen.</p><p>Hinweis: Ich kann innerhalb von acht Wochen, beginnend mit dem	Belastungsdatum, die Erstattung des belasteten Betrages verlangen. Es gelten dabei die mit meinem Kreditinstitut vereinbarten Bedingungen.</p>',
    'FCPO_RATEPAY_ACCOUNTHOLDER'                          => 'Kontoinhaber',
    'FCPO_RATEPAY_MANDATE_IDENTIFICATION'                 => '<p>Ratepay GmbH - Ritterstraße 12-14 - 10969 Berlin<br> Gläubiger-ID: DE39RPY00000568463<br> Mandatsreferenz: WIRD SEPARAT MITGETEILT</p>',
    'FCPO_EMAIL_CLEARING_SUBJECT'                         => 'Ihre Überweisungsdaten zur Bestellnummer',
    'FCPO_EMAIL_CLEARING_BODY_WELCOME'                    => "Hallo %NAME% %SURNAME%,\nzur Begleichung der Rechnung verwenden Sie bitte folgende Daten zur Überweisung:\n\n",
    'FCPO_EMAIL_CLEARING_BODY_THANKYOU'                   => 'Vielen Dank, dein %SHOPNAME%-Team',
    'FCPO_EMAIL_USAGE'                                    => 'Verwendungszweck',
    'FCPO_KLARNA_COMBINED_DATA_AGREEMENT'                 => 'Ich stimme zu, dass meine persönlichen Daten zur Durchführung der Zahlung der Klarna GmbH gesendet werden dürfen.',
    'FCPO_KLARNA_NOT_AGREED'                              => 'Sie müssen der Übermittlung ihrer Daten zustimmen, um mit Klarna zu bezahlen.',
    'FCPO_KLARNA_NO_AUTHORIZATION'                        => 'Es ist ein unerwarteter Fehler aufgetreten.',

    'FCPO_BNPL_TNC_DATAPROTECTION_NOTICE'                 => 'Mit Abschluss dieser Bestellung erkläre ich mich mit den <span style="color: black; font-weight: bold; text-decoration: underline"><a href="https://legal.paylater.payone.com/de/terms-of-payment.html" target="_blank" rel="noreferrer noopener">ergänzenden Zahlungsbedingungen</a></span> und der Durchführung einer Risikoprüfung für die ausgewählte Zahlungsart einverstanden. Den <span style="color: black; font-weight: bold; text-decoration: underline"><a href="https://legal.paylater.payone.com/de/data-protection-payments.html" target="_blank" rel="noreferrer noopener">ergänzenden Datenschutzhinweis</a></span> habe ich zur Kenntnis genommen.',
    'FCPO_BNPL_FON'                                       => 'Telefonnummer',
    'FCPO_BNPL_FON_B2B'                                   => 'Telefonnummer des Bestellers',
    'FCPO_BNPL_IBAN'                                      => 'IBAN',
    'FCPO_BNPL_SECINSTALLMENT_UNAVAILABLE'                => 'Gesicherter Ratenkauf wird für Ihren aktuellen Warenkorb nicht unterstützt. Bitte wählen Sie eine andere Zahlart.',
    'FCPO_BNPL_SECINSTALLMENT_SELECTION'                  => 'Anzahl von Raten',
    'FCPO_BNPL_SECINSTALLMENT_OVW_TITLE'                  => 'Übersicht',
    'FCPO_BNPL_SECINSTALLMENT_OVW_NBRATES'                => 'Anzahl von Raten',
    'FCPO_BNPL_SECINSTALLMENT_OVW_TOTALFINANCING'         => 'Finanzierungsbetrag',
    'FCPO_BNPL_SECINSTALLMENT_OVW_TOTALAMOUNT'            => 'Gesamt',
    'FCPO_BNPL_SECINSTALLMENT_OVW_INTEREST'               => 'Zinssatz',
    'FCPO_BNPL_SECINSTALLMENT_OVW_EFFECTIVEINTEREST'      => 'Effektivzinssatz',
    'FCPO_BNPL_SECINSTALLMENT_OVW_MONTHLYRATE'            => 'Monatliche Rate',
    'FCPO_BNPL_SECINSTALLMENT_OVW_DL_CREDINFO'            => '&gt;&nbsp;Ratenkauf Informationen herunterladen',
    'FCPO_BNPL_SECINSTALLMENT_PLAN_INVALID'               => 'Bitte wählen Sie Ihre gewünschte Anzahl von Raten',
    'FCPO_BNPL_USTID'                                     => 'Umsatzsteueridentifikationsnummer',
    'FCPO_BNPL_NO_COMPANY'                                => 'Keine Firma? Klicken Sie <a href="index.php?cl=account_user" style="color:green;">hier</a> um Ihre Adresse zu ändern.',

    'FCPO_CONFIG_GROUP_APPLE_PAY'                      => "Apple Pay",
    'FCPO_HELP_APPLE_PAY_MERCHANT_ID'                  => "Merchant ID",
    'FCPO_APPLE_PAY_MERCHANT_ID'                       => "Merchant ID",
    'FCPO_HELP_APPLE_PAY_CERTIFICATE'                  => "Der Name des Zertifikats wird dem Textfeld entnommen . Es kann in jeden gewünschten Namen geändert werden. Wenn beim Speichern der hochgeladenen Datei leer ist, wird standardmäßig der ursprüngliche Name der Datei verwendet.<br/>Das Textfeld kann auch verwendet werden, um eine vorhandene Zertifikatsdatei auf dem Server zu benennen, ohne eine neue Datei hochzuladen.",
    'FCPO_APPLE_PAY_CERTIFICATE'                       => "Händleridentifikationszertifikat",
    'FCPO_APPLE_PAY_CONFIG_CERTIFICATE_MISSING'        => "Die aktuell konfigurierte Zertifikatsdatei existiert nicht.<br/>Apple Pay kann nicht als Zahlungsmethode verwendet werden.",
    'FCPO_HELP_APPLE_PAY_KEY'                          => "Dies ist ein Mehrfachfeld. Sie können eine Datei mit dem Schlüssel hochladen, oder den Inhalt des Schlüssels direkt in das Textfeld unten eingeben. Priorität hat die hochgeladene Datei, wenn beide Optionen verwendet werden!<br/><br/>
Das kleinere Textfeld wird verwendet, um die Zieldatei oder den Pfad zu einer vorhandenen Schlüsseldatei auf dem Server zu benennen.<br/>
- Wenn beim Speichern der hochgeladenen Datei leer, wird der ursprüngliche Name der hochgeladenen Datei verwendet.<br/>
- Wenn beim Speichern der Direkteingabe leer, wird der Standardname 'merchant_id.key' verwendet.<br/>
- Wenn leer, während keines davon ausgeführt wird, wird ein leerer Wert angenommen.",
    'FCPO_APPLE_PAY_KEY'                               => "Privater Schlüssel des Zertifikats",
    'FCPO_HELP_APPLE_PAY_PASSWORD'                     => "Passwort für Zertifikatsschlüssel",
    'FCPO_APPLE_PAY_PASSWORD'                          => "Passwort für Zertifikatsschlüssel",
    'FCPO_APPLE_PAY_CREDITCARD'                        => "Erlaubte Kreditkarten",
    'FCPO_APPLE_PAY_CREATE_SESSION_ERROR'              => "Fehler beim Herstellen der Verbindung zum Apple Pay Service.",
    'FCPO_APPLE_PAY_CREATE_SESSION_ERROR_CARDS'        => "In der Konfiguration ist kein gültiger Kreditkartentyp zulässig. Die Apple Pay-Sitzung kann nicht initialisiert werden.",

    'PAYONE Alipay' => 'PAYONE Alipay',
    'PAYONE Amazon Pay' => 'PAYONE Amazon Pay',
    'PAYONE Apple Pay' => 'PAYONE Apple Pay',
    'PAYONE Bancontact' => 'PAYONE Bancontact',
    'PAYONE eps Überweisung' => 'PAYONE eps Überweisung',
    'PAYONE Gesicherter Rechnungskauf' => 'PAYONE Gesicherter Rechnungskauf',
    'PAYONE Gesicherter Rechnungskauf (neu)' => 'PAYONE Gesicherter Rechnungskauf',
    'PAYONE Gesicherter Ratenkauf' => 'PAYONE Gesicherter Ratenkauf',
    'PAYONE Gesicherte Lastschrift' => 'PAYONE Gesicherte Lastschrift',
    'PAYONE iDEAL' => 'PAYONE iDEAL',
    'PAYONE Klarna Ratenkauf' => 'PAYONE Klarna Ratenkauf',
    'PAYONE Klarna Rechnung' => 'PAYONE Klarna Rechnung',
    'PAYONE Klarna Sofort bezahlen' => 'PAYONE Klarna Sofort bezahlen',
    'PAYONE Kreditkarte' => 'PAYONE Kreditkarte',
    'PAYONE Lastschrift' => 'PAYONE Lastschrift',
    'PAYONE Nachnahme' => 'PAYONE Nachnahme',
    'PAYONE PayPal Express' => 'PAYONE PayPal Express',
    'PAYONE PayPal' => 'PAYONE PayPal',
    'PAYONE PayPal Express V2' => 'PAYONE PayPal Express V2',
    'PAYONE PayPal V2' => 'PAYONE PayPal V2',
    'PAYONE PostFinance Card' => 'PAYONE PostFinance Card',
    'PAYONE PostFinance E-Finance' => 'PAYONE PostFinance E-Finance',
    'PAYONE Przelewy24' => 'PAYONE Przelewy24',
    'PAYONE Ratepay Rechnungskauf' => 'PAYONE Ratepay Rechnungskauf',
    'PAYONE Ratepay Lastschrift' => 'PAYONE Ratepay Lastschrift',
    'PAYONE Ratepay Ratenkauf' => 'PAYONE Ratepay Ratenkauf',
    'PAYONE Rechnungskauf' => 'PAYONE Rechnungskauf',
    'PAYONE Sofort Überweisung' => 'PAYONE Sofort Überweisung',
    'PAYONE Unzer Lastschrift' => 'PAYONE Unzer Lastschrift',
    'PAYONE Unzer Ratenkauf' => 'PAYONE Unzer Ratenkauf',
    'PAYONE Unzer Rechnungskauf' => 'PAYONE Unzer Rechnungskauf',
    'PAYONE Vorkasse' => 'PAYONE Vorkasse',
    'PAYONE WeChat Pay' => 'PAYONE WeChat Pay',
    'FCPO_KLARNA' => 'PAYONE Klarna Payments',

    'FCPO_RATEPAY_RUNTIME_TITLE' => 'Laufzeit',
    'FCPO_RATEPAY_RUNTIME_DESCRIPTION' => 'Anzahl der monatlichen Raten',
    'FCPO_RATEPAY_RATE_TITLE' => 'Ratenh&ouml;he',
    'FCPO_RATEPAY_RATE_DESCRIPTION' => 'H&ouml;he der monatlichen Raten',
    'FCPO_RATEPAY_RATE_CALCULATE' => 'Rate berechnen',
    'FCPO_RATEPAY_CALCULATION_INTRO_PART1' => 'Im Folgenden k&ouml;nnen Sie entscheiden, wie Sie die Ratenzahlung gestalten m&ouml;chten. ',
    'FCPO_RATEPAY_CALCULATION_INTRO_PART2' => 'Legen Sie bequem die Anzahl der Raten und somit <b>die Laufzeit</b> der Ratenzahlung fest ',
    'FCPO_RATEPAY_CALCULATION_INTRO_PART3' => 'oder bestimmen sie einfach die gew&uuml;nschte <b>monatliche Ratenh&ouml;he.</b>',

    'FCPO_RATEPAY_CALCULATION_DETAILS_TITLE' => 'Pers&ouml;nliche Ratenberechnung',
    'FCPO_RATEPAY_CALCULATION_DETAILS_CODE_TRANSLATION_603' => 'Die Wunschrate entspricht den vorgegebenen Bedingungen.',
    'FCPO_RATEPAY_CALCULATION_DETAILS_CODE_TRANSLATION_671' => 'Die letzte Rate war niedriger als erlaubt. Laufzeit und/oder Rate wurden angepasst.',
    'FCPO_RATEPAY_CALCULATION_DETAILS_CODE_TRANSLATION_688' => 'Die Rate war niedriger als f&uuml;r Ratenpl&auml;ne mit langer Laufzeit erlaubt. Die Laufzeit wurde angepasst.',
    'FCPO_RATEPAY_CALCULATION_DETAILS_CODE_TRANSLATION_689' => 'Die Rate war niedriger als f&uuml;r Ratenpl&auml;ne mit kurzer Laufzeit erlaubt. Die Laufzeit wurde angepasst.',
    'FCPO_RATEPAY_CALCULATION_DETAILS_CODE_TRANSLATION_695' => 'Die Rate ist zu hoch f&uuml;r die minimal verf&uuml;gbare Laufzeit. Die Rate wurde verringert.',
    'FCPO_RATEPAY_CALCULATION_DETAILS_CODE_TRANSLATION_696' => 'Die Wunschrate ist zu niedrig. Die Rate wurde erh&ouml;ht.',
    'FCPO_RATEPAY_CALCULATION_DETAILS_CODE_TRANSLATION_697' => 'F&uuml;r die gew&auml;hlte Ratenh&ouml;he ist keine entsprechende Laufzeit verf&uuml;gbar. Die Ratenh&ouml;he wurde angepasst.',
    'FCPO_RATEPAY_CALCULATION_DETAILS_CODE_TRANSLATION_698' => 'Die Rate war zu niedrig f&uuml;r die maximal verf&uuml;gbare Laufzeit. Die Rate wurde erh&ouml;ht.',
    'FCPO_RATEPAY_CALCULATION_DETAILS_CODE_TRANSLATION_699' => 'Die Rate ist zu hoch f&uuml;r die minimal verf&uuml;gbare Laufzeit. Die Rate wurde verringert.',
    'FCPO_RATEPAY_CALCULATION_DETAILS_CODE_TRANSLATION_RATE_INCREASED' => 'Die Wunschrate war nicht verfügbar und wurde erh&ouml;ht.',
    'FCPO_RATEPAY_CALCULATION_DETAILS_CODE_TRANSLATION_RATE_REDUCED' => 'Die Wunschrate war nicht verfügbar und wurde verringert.',
    'FCPO_RATEPAY_CALCULATION_DETAILS_EXAMPLE' => 'Die Ratenberechnung kann zum Ratenplan abweichen',

    'FCPO_RATEPAY_CALCULATION_DETAILS_SHOW' => 'Zeige Details',
    'FCPO_RATEPAY_CALCULATION_DETAILS_HIDE' => 'Schließe Details',

    'FCPO_RATEPAY_CALCULATION_DETAILS_PRICE_LABEL' => 'Warenwert',
    'FCPO_RATEPAY_CALCULATION_DETAILS_PRICE_DESC' => 'Summe aller Artikel Ihres Warenkorbs, incl. Versandkosten etc.',
    'FCPO_RATEPAY_CALCULATION_DETAILS_SERVICE_CHARGE_LABEL' => 'Vertragsabschlussgeb&uuml;hr',
    'FCPO_RATEPAY_CALCULATION_DETAILS_SERVICE_CHARGE_DESC' => 'Bei Ratenzahlung pro Bestellung anfallende, einmalige Bearbeitungsgeb&uuml;hr.',
    'FCPO_RATEPAY_CALCULATION_EFFECTIVE_RATE_LABEL' => 'Effektiver Jahreszins',
    'FCPO_RATEPAY_CALCULATION_EFFECTIVE_RATE_DESC' => 'Gesamtkosten des Kredits als j&auml;hrlicher Prozentsatz.',
    'FCPO_RATEPAY_CALCULATION_DEBIT_RATE_LABEL' => 'Sollzinssatz pro Monat',
    'FCPO_RATEPAY_CALCULATION_DEBIT_RATE_DESC' => 'Periodischer Prozentsatz, der auf das in Anspruch genommene Darlehen angewendet wird.',
    'FCPO_RATEPAY_CALCULATION_INTEREST_AMOUNT_LABEL' => 'Zinsbetrag',
    'FCPO_RATEPAY_CALCULATION_INTEREST_AMOUNT_DESC' => 'Konkreter Geldbetrag, der sich aus den Zinsen ergibt.',
    'FCPO_RATEPAY_CALCULATION_DURATION_MONTH_LABEL' => ' monatliche Raten &agrave;',
    'FCPO_RATEPAY_CALCULATION_DURATION_MONTH_DESC' => 'Monatlich f&auml;lliger Teilbetrag',
    'FCPO_RATEPAY_CALCULATION_LAST_RATE_LABEL' => 'zzgl. einer Abschlussrate &agrave;',
    'FCPO_RATEPAY_CALCULATION_LAST_RATE_DESC' => 'Im letzten Monat f&auml;lliger Teilbetrag',
    'FCPO_RATEPAY_CALCULATION_TOTAL_AMOUNT_LABEL' => 'Gesamtbetrag',
    'FCPO_RATEPAY_CALCULATION_TOTAL_AMOUNT_DESC' => 'Summe der vom K&auml;ufer zu zahlenden Betr&auml;ge aus Warenwert, Vertragsabschlussgeb&uuml;hr und Zinsen.',

    'FCPO_RATEPAY_INSTALLMENT_TYPE_TRANSFER_TITLE' => 'Rate per &Uuml;berweisung',
    'FCPO_RATEPAY_INSTALLMENT_TYPE_DEBIT_TITLE' => 'Rate per Lastschrift',
    'FCPO_RATEPAY_INSTALLMENT_SWITCH_TO_TRANSFER_LINK' => 'Ich m&ouml;chte die Ratenzahlungen selbst vornehmen und nicht per Lastschrift begleichen',
    'FCPO_RATEPAY_INSTALLMENT_SWITCH_TO_DEBIT_LINK' => 'Ich m&ouml;chte die Ratenzahlungen bequem per Lastschrift begleichen',


);

/*
[{oxmultilang ident="GENERAL_YOUWANTTODELETE"}]
*/
