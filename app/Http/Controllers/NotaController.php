<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Auth;

class NotaController extends Controller
{
    public function index()
    {
        $matricula = Auth::user()->matricula;
        $alunos = DB::table('turmas')->where('matricula', $matricula)->get();
        
        $nota = DB::table('notas')->where('matricula', $matricula)->get();

        $alunos = DB::table('turmas')->where('matricula', $matricula)->get();

        $notaAluno = DB::table('notas')->where('matricula', $matricula)->get();

        foreach ($notaAluno as $notaKey => $notaData) {
            /* dd($notaAluno);  */

            $photoshopPratica = $notaAluno[0]->notas ? $notaAluno[1]->notas : "--";
            $dominatingTrabalho = $notaAluno[1]->notas ? $notaAluno[1]->notas : "--";
            $dominatingTeorica = $notaAluno[2]->notas ? $notaAluno[2]->notas : "--";
            $gamesPratica = $notaAluno[3]->notas ? $notaAluno[3]->notas : "--";
            $masterTrabalho = $notaAluno[4]->notas ? $notaAluno[4]->notas : "--";
            $masterTeorica = $notaAluno[5]->notas ? $notaAluno[5]->notas : "--";
            $videoTeorica = $notaAluno[6]->notas ? $notaAluno[6]->notas : "--";
            $playTeorica = $notaAluno[7]->notas ? $notaAluno[7]->notas : "--";
            $photoshopTrabalho = $notaAluno[8]->notas ? $notaAluno[8]->notas : "--";
            $gamesTrabalho = $notaAluno[9]->notas ? $notaAluno[9]->notas : "--";
            $playPratica = $notaAluno[10]->notas ? $notaAluno[10]->notas : "--";
            $playTrabalho = $notaAluno[11]->notas ? $notaAluno[11]->notas : "--";
            $photoshopTeorica = $notaAluno[12]->notas ? $notaAluno[12]->notas : "--";
            $dominatingPratica = $notaAluno[13]->notas ? $notaAluno[13]->notas : "--";
            $gamesTeorica = $notaAluno[14]->notas ? $notaAluno[14]->notas : "--";
            $masterPratica = $notaAluno[15]->notas ? $notaAluno[15]->notas : "--";
            $videoPratica = $notaAluno[16]->notas ? $notaAluno[16]->notas : "--";
            $videoTrabalho = $notaAluno[17]->notas ? $notaAluno[17]->notas : "--";

            if (is_numeric($playTeorica) && is_numeric($playPratica) && is_numeric($playTrabalho)) {
                $playMedia = ($playTeorica + $playPratica + $playTrabalho) / 3;
            } else {
                $playMedia = "--";
            }

            if (is_numeric($photoshopTeorica) && is_numeric($photoshopPratica) && is_numeric($photoshopTrabalho)) {
                $photoshopMedia = ($photoshopTeorica + $photoshopPratica + $photoshopTrabalho) / 3;
            } else {
                $photoshopMedia = "--";
            }

            if (is_numeric($dominatingTeorica) && is_numeric($dominatingPratica) && is_numeric($dominatingTrabalho)) {
                $dominatingMedia = ($dominatingTeorica + $dominatingPratica + $dominatingTrabalho) / 3;
            } else {
                $dominatingMedia = "--";
            }

            if (is_numeric($gamesTeorica) && is_numeric($gamesPratica) && is_numeric($gamesTrabalho)) {
                $gameMedia = ($gamesTeorica + $gamesPratica + $gamesTrabalho) / 3;
            } else {
                $gamesMedia = "--";
            }

            if (is_numeric($masterTeorica) && is_numeric($masterPratica) && is_numeric($masterTrabalho)) {
                $masterMedia = ($masterTeorica + $masterPratica + $masterTrabalho) / 3;
            } else {
                $masterMedia = "--";
            }

            if (is_numeric($videoTeorica) && is_numeric($videoPratica) && is_numeric($videoTrabalho)) {
                $videoMedia = ($videoTeorica + $videoPratica + $videoTrabalho) / 3;
            } else {
                $videoMedia = "--";
            }

            $notas = [
                "modulos" => [
                    "PLAY GO",
                    "PHOTOSHOP",
                    "DOMINATING",
                    "GAME AND ANIMATION",
                    "MASTER OF LANGUAGE",
                    "VIDEO EDITION",
                ],
                "prova_teorica" => [
                    $playTeorica, $photoshopTeorica, $dominatingTeorica, $gamesTeorica, $masterTeorica, $videoTeorica,
                ],
                "prova_pratica" => [
                    $playPratica, $photoshopPratica, $dominatingPratica, $gamesPratica, $masterPratica, $videoPratica,
                ],
                "trabalhos" => [
                    $playTrabalho, $photoshopTrabalho, $dominatingTrabalho, $gamesTrabalho, $masterTrabalho, $videoTrabalho,
                ],
                "media" => [
                    $playMedia, $photoshopMedia, $dominatingMedia, $gamesMedia, $masterMedia, $videoMedia,
                ],
            ];
        }

        return view('portal/nota/index', compact('alunos', 'notas'));
    }

}
