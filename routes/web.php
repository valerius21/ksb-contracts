<?php

use App\Http\Controllers\ProfileController;
use App\Http\Resources\ContractResource;
use App\Models\Contract;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/api/contracts', function () {
    return ContractResource::collection(Contract::all());
});

Route::post('/api/contracts', function () {
//    Schema::create('contracts', function (Blueprint $table) {
//        $table->id();
//        $table->string('cuid')->unique();
//        $table->foreignIdFor(User::class);
//        // root file
//        // attachments
//        $table->string('rechtsgebiet');
//        $table->string('vertragsgruppe');
//        $table->string('vertragstyp');
//        $table->string('muster');
//        $table->string('vertragsinhalt');
//        $table->string('autor');
//        $table->string('geschaeftsbereich');
//        $table->string('anmerkungen_autor')->nullable();
//        $table->string('hinweise_autor')->nullable();
//        $table->string('hinweise_user')->nullable();
//        $table->json('meta')->nullable();
//        $table->timestamp('erstellt')->nullable();
//        $table->timestamp('zuletzt_geaendert')->nullable();
//        $table->timestamps();
//    });

    // example request
//    {"anmerkungen_des_autors":"Mustervorlage Schriftsatz KSB INTAX","anmerkungen_des_autors_zum_vertragsinhalt":"","attachments":["2010_06_09_14_06_1_440699_ra_intern_leitfaden_schriftsatzgestaltung_stand_22_11_2016_hICylBDtE3.pdf","2010_06_09_14_06_2_0_schriftsatz_vollsta_ndiges_muster_stand_06_01_2015_qr0Js7zuDo.pdf"],"autor":"AK Sekretariat/AK Maketing","collectionId":"gue3bg1tlrza4xe","collectionName":"contracts","created":"2024-01-27 18:32:34.992Z","erstellt_am":"2010-06-09 00:00:00.000Z","geschaeftsbereich":"GB 7","hinweise_von_nutzern":"","hinweise_von_nutzern_des_musters":"","id":"n8q0bahguua2ax1","meta":"\u003c?xml version=\"1.0\" encoding=\"UTF-8\"?\u003e\u003chtml xmlns=\"http://www.w3.org/1999/xhtml\"\u003e\n    \n    \u003chead\u003e\n        \n        \u003cmeta name=\"pdf:PDFVersion\" content=\"1.4\"/\u003e\n        \n        \u003cmeta name=\"xmp:CreatorTool\" content=\"PDFCreator Version 1.7.1\"/\u003e\n        \n        \u003cmeta name=\"pdf:docinfo:title\" content=\"Muster 'Mustervorlage Schriftsatz KSB INTAX'\"/\u003e\n        \n        \u003cmeta name=\"pdf:hasXFA\" content=\"false\"/\u003e\n        \n        \u003cmeta name=\"access_permission:modify_annotations\" content=\"true\"/\u003e\n        \n        \u003cmeta name=\"access_permission:can_print_degraded\" content=\"true\"/\u003e\n        \n        \u003cmeta name=\"dc:creator\" content=\"Admin\"/\u003e\n        \n        \u003cmeta name=\"dcterms:created\" content=\"2021-07-16T07:43:56Z\"/\u003e\n        \n        \u003cmeta name=\"dcterms:modified\" content=\"2021-07-16T07:43:56Z\"/\u003e\n        \n        \u003cmeta name=\"dc:format\" content=\"application/pdf; version=1.4\"/\u003e\n        \n        \u003cmeta name=\"xmpMM:DocumentID\" content=\"uuid:13010c96-e865-11eb-0000-8260d6133255\"/\u003e\n        \n        \u003cmeta name=\"pdf:docinfo:creator_tool\" content=\"PDFCreator Version 1.7.1\"/\u003e\n        \n        \u003cmeta name=\"access_permission:fill_in_form\" content=\"true\"/\u003e\n        \n        \u003cmeta name=\"pdf:docinfo:modified\" content=\"2021-07-16T07:43:56Z\"/\u003e\n        \n        \u003cmeta name=\"pdf:hasCollection\" content=\"false\"/\u003e\n        \n        \u003cmeta name=\"pdf:encrypted\" content=\"false\"/\u003e\n        \n        \u003cmeta name=\"dc:title\" content=\"Muster 'Mustervorlage Schriftsatz KSB INTAX'\"/\u003e\n        \n        \u003cmeta name=\"xmp:CreateDate\" content=\"2021-07-16T07:43:56Z\"/\u003e\n        \n        \u003cmeta name=\"Content-Length\" content=\"42277\"/\u003e\n        \n        \u003cmeta name=\"pdf:hasMarkedContent\" content=\"false\"/\u003e\n        \n        \u003cmeta name=\"Content-Type\" content=\"application/pdf\"/\u003e\n        \n        \u003cmeta name=\"xmp:ModifyDate\" content=\"2021-07-16T07:43:56Z\"/\u003e\n        \n        \u003cmeta name=\"pdf:docinfo:creator\" content=\"Admin\"/\u003e\n        \n        \u003cmeta name=\"pdf:producer\" content=\"GPL Ghostscript 9.07\"/\u003e\n        \n        \u003cmeta name=\"dc:subject\" content=\"()\"/\u003e\n        \n        \u003cmeta name=\"xmp:About\" content=\"uuid:13010c96-e865-11eb-0000-8260d6133255\"/\u003e\n        \n        \u003cmeta name=\"access_permission:extract_for_accessibility\" content=\"true\"/\u003e\n        \n        \u003cmeta name=\"access_permission:assemble_document\" content=\"true\"/\u003e\n        \n        \u003cmeta name=\"xmpTPg:NPages\" content=\"2\"/\u003e\n        \n        \u003cmeta name=\"pdf:hasXMP\" content=\"true\"/\u003e\n        \n        \u003cmeta name=\"access_permission:extract_content\" content=\"true\"/\u003e\n        \n        \u003cmeta name=\"access_permission:can_print\" content=\"true\"/\u003e\n        \n        \u003cmeta name=\"X-TIKA:Parsed-By\" content=\"org.apache.tika.parser.DefaultParser\"/\u003e\n        \n        \u003cmeta name=\"X-TIKA:Parsed-By\" content=\"org.apache.tika.parser.pdf.PDFParser\"/\u003e\n        \n        \u003cmeta name=\"meta:keyword\" content=\"()\"/\u003e\n        \n        \u003cmeta name=\"access_permission:can_modify\" content=\"true\"/\u003e\n        \n        \u003cmeta name=\"pdf:docinfo:producer\" content=\"GPL Ghostscript 9.07\"/\u003e\n        \n        \u003cmeta name=\"pdf:docinfo:created\" content=\"2021-07-16T07:43:56Z\"/\u003e\n        \n        \u003ctitle\u003eMuster 'Mustervorlage Schriftsatz KSB INTAX'\u003c/title\u003e\n        \n    \u003c/head\u003e\n    \n    \u003cbody\u003e\n        \u003cdiv class=\"page\"\u003e\n            \u003cp/\u003e\n            \n            \u003cp\u003eRechtsgebietRechtsgebietRechtsgebietRechtsgebiet :::: Sonstige Klauseln, Vorlagen und Arbeitshilfen\n\u003c/p\u003e\n            \n            \u003cp\u003eVertragsgruppeVertragsgruppeVertragsgruppeVertragsgruppe :::: Sonstige Arbeitshilfen\n\u003c/p\u003e\n            \n            \u003cp\u003eVertragstypVertragstypVertragstypVertragstyp :::: Mustervorlage Schriftsatz KSB INTAX\n\u003c/p\u003e\n            \n            \u003cp\u003eMusterMusterMusterMuster:::: Mustervorlage Schriftsatz KSB INTAX\n\u003c/p\u003e\n            \n            \u003cp\u003eVertragsinhaltVertragsinhaltVertragsinhaltVertragsinhalt :::: Orientierungshilfe für die Arbeit mit dem \nWord-Assistenten\n\u003c/p\u003e\n            \n            \u003cp\u003eAutorAutorAutorAutor:::: AK Sekretariat/AK Maketing\n\u003c/p\u003e\n            \n            \u003cp\u003eGeschäftsbereichGeschäftsbereichGeschäftsbereichGeschäftsbereich :::: GB 7\n\u003c/p\u003e\n            \n            \u003cp\u003eErstellt amErstellt amErstellt amErstellt am :::: 09.06.2010\n\u003c/p\u003e\n            \n            \u003cp\u003eZuletzt geändert amZuletzt geändert amZuletzt geändert amZuletzt geändert am :::: 23.11.2016\n\u003c/p\u003e\n            \n            \u003cp\u003e440699_RA-intern Leitfaden Schriftsatzgestaltung - Stand 22.11.2016.pdf440699_RA-intern Leitfaden Schriftsatzgestaltung - Stand 22.11.2016.pdf\n\u003c/p\u003e\n            \n            \u003cp\u003e0_Schriftsatz Vollständiges Muster - Stand 06.01.2015.pdf0_Schriftsatz Vollständiges Muster - Stand 06.01.2015.pdf\n\u003c/p\u003e\n            \n            \u003cp\u003eAchtungAchtungAchtungAchtung::::    Anmerkungen des Autors zu den Mustern beachtenAnmerkungen des Autors zu den Mustern beachtenAnmerkungen des Autors zu den Mustern beachtenAnmerkungen des Autors zu den Mustern beachten !!!!\n\u003c/p\u003e\n            \n            \u003cp\u003eMusterMusterMusterMusterMusterMusterMusterMusterMusterMusterMusterMuster\n\u003c/p\u003e\n            \n            \u003cp\u003eVertragstypVertragstypVertragstypVertragstyp :::: Mustervorlage Schriftsatz KSB INTAX\n\u003c/p\u003e\n            \n            \u003cp\u003eMusterMusterMusterMuster:::: Mustervorlage Schriftsatz KSB INTAX\n\u003c/p\u003e\n            \n            \u003cp\u003eAnmerkungen des Autors zum VertragsinhaltAnmerkungen des Autors zum VertragsinhaltAnmerkungen des Autors zum VertragsinhaltAnmerkungen des Autors zum Vertragsinhalt ::::\n\u003c/p\u003e\n            \n            \u003cp\u003eIn dem Anschriftenblock keine Leerzeile zwischen Straße und Ort\n\u003c/p\u003e\n            \n            \u003cp\u003eDas Namenskürzel des Mitarbeiters, der den SS geschrieben hat, \n\u003c/p\u003e\n            \n            \u003cp\u003eimmer hinter \"Unser Zeichen\" (z.B. 9-10 /aa)\nWenn SS nicht vom SB sondern von einem anderen RA diktiert wurde, \n\u003c/p\u003e\n            \n            \u003cp\u003edessen Diktatzeichen ebenfalls bei \"Unser Zeichen\" aufführen \n(z.B. 9-10 A/aa)\nGerichtsaktenzeichen, Termin, SS-Bezeichnung \n\u003c/p\u003e\n            \n            \u003cp\u003e(z.B. \"Berufungsbegründung\") und \"In Sachen\" linksbündig\nSS-Bezeichnung und Rubrum in Fettdruck\n\u003c/p\u003e\n            \n            \u003cp\u003ezwischen \"In Sachen\" und Rubrum 1 Leerzeile\n\u003c/p\u003e\n            \n            \u003cp\u003eTextfeld Rubrum und Prozessbevollmächtigte in 1,5-zeilig ohne \n\u003c/p\u003e\n            \n            \u003cp\u003eLeerzeilen\nAktenzeichen der gegnerischen Prozeßbevollmächtigen im Rubrum \n\u003c/p\u003e\n            \n            \u003cp\u003eaufführen: \"Zu: …\"\nAufzählungen werden nicht nach links ausgerückt, sondern über den \n\u003c/p\u003e\n            \n            \u003cp\u003eText gesetzt bzw. Text entsprechtend rechts eingerückt\nÜberschriften sind mit \"Standard ohne Leerzeile\" 1,5-zeilig im Fettdruck \n\u003c/p\u003e\n            \n            \u003cp\u003ezu formatieren\nBerufsbezeichnung unter die Unterschriftenzeile\n\u003c/p\u003e\n            \n            \u003cp\u003eAnmerkung des AutorsAnmerkung des AutorsAnmerkung des AutorsAnmerkung des AutorsAnmerkung des AutorsAnmerkung des AutorsAnmerkung des AutorsAnmerkung des AutorsAnmerkung des AutorsAnmerkung des AutorsAnmerkung des AutorsAnmerkung des Autors\u003c/p\u003e\n            \n            \u003cp/\u003e\n            \n        \u003c/div\u003e\n        \n        \u003cdiv class=\"page\"\u003e\n            \u003cp/\u003e\n            \n            \u003cp\u003eVertragstypVertragstypVertragstypVertragstyp :::: Mustervorlage Schriftsatz KSB INTAX\n\u003c/p\u003e\n            \n            \u003cp\u003eMusterMusterMusterMuster:::: Mustervorlage Schriftsatz KSB INTAX\n\u003c/p\u003e\n            \n            \u003cp\u003eHinweise von Nutzern des MustersHinweise von Nutzern des MustersHinweise von Nutzern des MustersHinweise von Nutzern des Musters ::::\n\u003c/p\u003e\n            \n            \u003cp\u003eHinweise von NutzernHinweise von NutzernHinweise von NutzernHinweise von NutzernHinweise von NutzernHinweise von NutzernHinweise von NutzernHinweise von NutzernHinweise von NutzernHinweise von NutzernHinweise von NutzernHinweise von Nutzern\u003c/p\u003e\n            \n            \u003cp/\u003e\n            \n        \u003c/div\u003e\n        \n    \u003c/body\u003e\n\u003c/html\u003e\n","muster":"Mustervorlage Schriftsatz KSB INTAX","rechtsgebiet":"Sonstige Klauseln, Vorlagen und Arbeitshilfen","root_file":"2010_06_09_14_06_0_mustervorlage_schriftsatz_ksb_intax_iNSoAtPGei.pdf","updated":"2024-01-27 18:32:34.992Z","vertragsgruppe":"Sonstige Arbeitshilfen","vertragsinhalt":"Orientierungshilfe für die Arbeit mit dem Word-Assistenten","vertragstyp":"Mustervorlage Schriftsatz KSB INTAX","zuletzt_geaendert_am":"2016-11-23 00:00:00.000Z"}

    $data = request()->validate([
        'anmerkungen_autor' => 'required|string',
        'muster' => 'required|string',
        'vertragsgruppe' => 'required|string',
        'vertragstyp' => 'required|string',
        'rechtsgebiet' => 'required|string',
        'autor' => 'required|string',
        'geschaeftsbereich' => 'required|string',
        'hinweise_autor' => 'nullable|string',
        'hinweise_user' => 'nullable|string',
        'meta' => 'nullable|string',
        'attachments' => 'nullable|array',
        'erstellt' => 'nullable|string',
        'zuletzt_geaendert' => 'nullable|string',
        'cuid' => 'nullable|string',
    ]);

    logger()->info('Contract created: ' . json_encode($data));

    return ContractResource::collection(Contract::create($data));
});


//
//Route::get('/dashboard', function () {
//    return Inertia::render('Dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
