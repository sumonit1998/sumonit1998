<?php 
namespace App\Controller;

use App\Entity\TeamPlayer;
use App\Entity\Team;
use App\Entity\Player;
use App\Repository\PlayerRepository;
use App\Repository\ListingRepository;
use App\Repository\TeamPlayerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Listing;

#[Route('/player')]
class PlayerController extends AbstractController
{	
	#[Route('/', name: 'app_player_index', methods: ['GET'])]
	public function index(Request $request,PlayerRepository $playerRepository) {
		 
		return $this->render('player/index.html.twig', [
            'players' => $playerRepository->findAvailablePlayersForBuy(),
            'teamId' => $request->get('teamId'),
        ]);
	}

	#[Route('/buy', name: 'app_player_buy', methods: ['GET'])]
	public function buyPlayer(Request $request, EntityManagerInterface $em, ListingRepository $listingRepository) {

		$team = $em->getRepository(Team::class)->find($request->get('teamId'));
		$player = $em->getRepository(Player::class)->find($request->get('playerId'));

		$listings = $em->getRepository(Listing::class)->findBy(['player' => $request->get('playerId')]); 

		foreach ($listings as $listing) {
	    $listingRepository->remove($listing, true);
		}	
		
		$player->setStatus(1);


		$teamPlayer = new TeamPlayer();
		$teamPlayer->setTeam($team);
		$teamPlayer->setPlayer($player);

		$em->persist($teamPlayer);
        $em->flush();

		return $this->redirectToRoute('app_team_index', [], Response::HTTP_SEE_OTHER);
	}


	#[Route('/sell', name: 'app_player_sell', methods: ['GET'])]
	public function sellPlayer(Request $request, EntityManagerInterface $em, TeamPlayerRepository $teamPlayerRepository){

		$team = $em->getRepository(Team::class)->find($request->get('teamId'));
		$player = $em->getRepository(Player::class)->find($request->get('playerId'));

		$teamPlayers = $em->getRepository(TeamPlayer::class)->findBy(['player' => $request->get('playerId')]);

		foreach ($teamPlayers as $teamPlayer) {
	    $teamPlayerRepository->remove($teamPlayer, true);
		}



		$listing = new Listing();
		$listing->setTeam($team );
		$listing->setPlayer($player);
		$listing->setPrice($player->getPrice());
		$player->setStatus(0);
		

		$em->persist($listing);
        $em->flush();

		return $this->redirectToRoute('app_team_index', [], Response::HTTP_SEE_OTHER);
	}

}