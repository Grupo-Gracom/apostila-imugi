<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Auth;
use App\User;

class NotaController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $matricula = Auth::user()->matricula;
        $aluno = User::find($id);
        $alunos = DB::table('turmas')->where('matricula', $matricula)->get();
        $notaAluno = DB::table('notas')->where('matricula', $matricula)->get();

        foreach ($notaAluno as $notaKey => $notaData) {
           

            $photoshopPratica = isset($notaAluno[0]->notas) ? $notaAluno[0]->notas : "--";
            $dominatingTrabalho = isset($notaAluno[1]->notas) ? $notaAluno[1]->notas : "--";
            
            $dominatingTeorica = isset($notaAluno[2]->notas) ? $notaAluno[2]->notas : "--";
            $gamesPratica = isset($notaAluno[3]->notas) ? $notaAluno[3]->notas : "--";
            $masterTrabalho = isset($notaAluno[4]->notas) ? $notaAluno[4]->notas : "--";
            $masterTeorica = isset($notaAluno[5]->notas) ? $notaAluno[5]->notas : "--";
            $videoTeorica = isset($notaAluno[6]->notas) ? $notaAluno[6]->notas : "--";
            $playTeorica = isset($notaAluno[7]->notas) ? $notaAluno[7]->notas : "--";
            $photoshopTrabalho = isset($notaAluno[8]->notas) ? $notaAluno[8]->notas : "--";
            $gamesTrabalho = isset($notaAluno[9]->notas) ? $notaAluno[9]->notas : "--";
            $playPratica = isset($notaAluno[10]->notas) ? $notaAluno[10]->notas : "--";
            $playTrabalho = isset($notaAluno[11]->notas) ? $notaAluno[11]->notas : "--";
            $photoshopTeorica = isset($notaAluno[12]->notas) ? $notaAluno[12]->notas : "--";
            $dominatingPratica = isset($notaAluno[13]->notas) ? $notaAluno[13]->notas : "--";
            $gamesTeorica = isset($notaAluno[14]->notas) ? $notaAluno[14]->notas : "--";
            $masterPratica = isset($notaAluno[15]->notas) ? $notaAluno[15]->notas : "--";
            $videoPratica = isset($notaAluno[16]->notas) ? $notaAluno[16]->notas : "--";
            $videoTrabalho = isset($notaAluno[17]->notas) ? $notaAluno[17]->notas : "--";

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
        if(isset($notas)){
            return view('portal/nota/index', compact('alunos', 'notas','aluno'));
        }else{

        return view('portal/nota/index', compact('alunos','aluno'));
       }
    }

}
