<?php

namespace App\Controller;

use App\Entity\Team;
use App\Form\TeamType;
use App\Repository\TeamRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

use App\Repository\TeamPlayerRepository;


class TeamController extends AbstractController
{   
    // show all teams
    #[Route('/', name: 'app_team_index', methods: ['GET'])]
    public function index(TeamRepository $teamRepository): Response
    {
        return $this->render('team/index.html.twig', [
            'teams' => $teamRepository->findAll(),
        ]);
    }

    // create team 
    #[Route('/new', name: 'app_team_new', methods: ['GET', 'POST'])]
    public function new(Request $request, TeamRepository $teamRepository): Response
    {
        $team = new Team();
        $form = $this->createForm(TeamType::class, $team);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $teamRepository->save($team, true);

            return $this->redirectToRoute('app_team_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('team/new.html.twig', [
            'team' => $team,
            'form' => $form,
        ]);
    }

    // show team players 
    #[Route('/teamplayer', name: 'app_player_teamplayer', methods: ['GET'])]
    public function buyPlayer(Request $request, ManagerRegistry $mm, TeamPlayerRepository $TeamPlayer) {

        $teamId = $request->get('id');
        $team = $mm->getManager()->getRepository(Team::class)->find($teamId);

        $teamPlayers = $team->getTeamPlayers();
        $players = [];
        
        foreach ($teamPlayers as $teamPlayer) {
            

            if ($teamPlayer->getPlayer()->getStatus() === 1) {
                $players[] = $teamPlayer->getPlayer();
            }
        }


         return $this->render('player/players.html.twig', [
            'team' => $team,
            'players' => $players,
        ]);
    }



    // #[Route('/{id}', name: 'app_team_show', methods: ['GET'])]
    // public function show(Team $team): Response
    // {
    //     return $this->render('team/show.html.twig', [
    //         'team' => $team,
    //     ]);
    // }

    // #[Route('/{id}/edit', name: 'app_team_edit', methods: ['GET', 'POST'])]
    // public function edit(Request $request, Team $team, TeamRepository $teamRepository): Response
    // {
    //     $form = $this->createForm(TeamType::class, $team);
    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $teamRepository->save($team, true);

    //         return $this->redirectToRoute('app_team_index', [], Response::HTTP_SEE_OTHER);
    //     }

    //     return $this->renderForm('team/edit.html.twig', [
    //         'team' => $team,
    //         'form' => $form,
    //     ]);
    // }

    // #[Route('/{id}', name: 'app_team_delete', methods: ['POST'])]
    // public function delete(Request $request, Team $team, TeamRepository $teamRepository): Response
    // {
    //     if ($this->isCsrfTokenValid('delete'.$team->getId(), $request->request->get('_token'))) {
    //         $teamRepository->remove($team, true);
    //     }

    //     return $this->redirectToRoute('app_team_index', [], Response::HTTP_SEE_OTHER);
    // }



}
