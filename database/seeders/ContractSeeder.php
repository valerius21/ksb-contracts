<?php

namespace Database\Seeders;

use App\Models\Contract;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ContractSeeder extends Seeder
{
    private const POCKETBASE_URL = 'http://127.0.0.1:8090/api/collections/contracts/records?perPage=500';

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 't@t.c'
        ]);

        $response = Http::get(self::POCKETBASE_URL);
        $items = $response->json()['items'];
        foreach ($items as $item) {
            $internal_id = $item['id'];
            $muster = $item['muster'];
            $root_file_url = self::getFileUrl($item['id'], $item['root_file']);
            $attachments_urls = $item['attachments'];
            $attachments_urls = array_map(function ($url) use ($internal_id) {
                return self::getFileUrl($internal_id, $url);
            }, $attachments_urls);
            $erstellt_am = $item['erstellt_am'];
            $zuletzt_geaendert_am = $item['zuletzt_geaendert_am'];
            $meta = $item['meta'];

            $rechtsgebiet = $item['rechtsgebiet'];
            $autor = $item['autor'];
            $geschaeftsbereich = $item['geschaeftsbereich'];
            $anmerkungen_autor = $item['anmerkungen_des_autors'];
            $vertragsgruppe = $item['vertragsgruppe'];
            $vertragstyp = $item['vertragstyp'];
            $vertragsinhalt = $item['vertragsinhalt'];
            $root_file_path = self::downloadFileAttachToContract($item['id'], $root_file_url);


            $attachment_paths = [];
            foreach ($attachments_urls as $attachments_url) {
                $attachment_paths[] = self::downloadFileAttachToContract($item['id'], $attachments_url);
            }

            $contract = Contract::create([
                'cuid' => $internal_id,
                'muster' => $muster,
                'vertragsgruppe' => $vertragsgruppe,
                'vertragstyp' => $vertragstyp,
                'vertragsinhalt' => $vertragsinhalt,
                'rechtsgebiet' => $rechtsgebiet,
                'autor' => $autor,
                'geschaeftsbereich' => $geschaeftsbereich,
                'anmerkungen_autor' => $anmerkungen_autor,
                'erstellt' => $erstellt_am,
                'zuletzt_geaendert' => $zuletzt_geaendert_am,
                'meta' => $meta,
                'user_id' => $user->id,
                'root_file' => ['url' => $root_file_path],
                'attachments' => $attachment_paths,
            ]);

            Log::debug($contract->toArray());
        }
    }

    private static function getFileUrl(string $cuid, string $root_file): string
    {
        return 'http://127.0.0.1:8090/api/files/contracts/' . $cuid . '/' . $root_file;
    }

    private static function downloadFileAttachToContract(string $cuid, string $file_url): string
    {
        $fileContents = Http::get($file_url)->body();
        $fileName = basename($file_url);
        $filePath = 'contracts/' . $cuid . '/' . $fileName;

        Storage::put($filePath, $fileContents);

        return $filePath;
    }
}
