<?php
namespace App\Security;

use App\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\User\UserInterface;

class UserVoter extends Voter
{
    // these strings are just invented: you can use anything
   // const VIEW = 'view';
   // const EDIT = 'edit';
    public const EDIT = 'edit';

    private const ATTRIBUTES = [
        self::EDIT,
    ];

    protected function supports($attribute, $subject)
    {
        return $subject instanceof UserInterface
            && in_array($attribute, self::ATTRIBUTES);
    }

    /**
     * @param string $a
     * @param User $u
     * @param TokenInterface $t
     *
     * @return bool
     */
    protected function voteOnAttribute(
        $attribute,
        $user,
        TokenInterface $token
    ) {
        switch ($attribute) {
            case self::EDIT:
                return $this->isOwner($token->getUser(), $user);
        }

        throw new \LogicException('Invalid attribute: '.$attribute);
    }

    private function isOwner(TokenInterface $token, ?User $user)
    {
        if (!$user) {
            return false;
        }

        return $token->getUser()->getId() === $user->getId();
    }
}