<?php

declare(strict_types=1);

use function Safe\file_get_contents;
use function Safe\glob;

/*
 * docs/adr/map-blocks-static-image-and-link.md: i blocchi mappa mostrano un'immagine locale e un link; nessuna API di mappe a
 * pagamento e nessuna richiesta a un terzo al caricamento della pagina (iframe, script, tile). Test sul sorgente, senza app.
 */
test('map blocks load no third-party map at page load', function (): void {
    $files = glob(dirname(__DIR__, 2).'/resources/views/components/blocks/map/*.blade.php');
    expect($files)->not->toBeEmpty();

    foreach ($files as $file) {
        $source = file_get_contents($file);
        expect($source)
            ->not->toContain('maps.googleapis.com')
            ->not->toContain('<iframe')
            ->not->toContain('<script')
            ->not->toMatch('/src="https?:\/\//');
    }
});

test('no theme view loads the Google Maps JavaScript API', function (): void {
    $root = dirname(__DIR__, 2).'/resources/views';
    foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($root, FilesystemIterator::SKIP_DOTS)) as $file) {
        if ($file instanceof SplFileInfo && str_ends_with($file->getFilename(), '.blade.php')) {
            expect(file_get_contents($file->getPathname()))->not->toContain('maps.googleapis.com');
        }
    }
});
