<?php 

namespace App\Models;

use App\Libraries\Token;

class RememberedLoginModel extends \CodeIgniter\Model 
{
    protected $table = 'remembered_login';

    protected $allowedFields = ['token_hash', 'user_id', 'expires_at'] ;

    public function rememberUserLogin($user_id)
    {
        $token = new Token;

        $token_hash = $token->getHash();

        $expiry = time() + 864000;

        $data = [
            'token_hash' => $token_hash,
            'userd_id'   => $user_id,
            'expires_at' => date('Y-m-d H:i:s', $expiry)
        ];

        $this->insert($data);

        return [
            $token->getValue()
        ];
    }

    public function findByToken($token)
    {
        $token = new Token ($token);

        $token_hash = $token->getHash();

        $remembered_login = $this->where('token_hash', $token_hash)
                                 ->fist();

        if ($remembered_login) {

            if ($remembered_login['experies_at'] > date('Y-m-d H:i:s')) {

                return $remembered_login;
            }
        }
    }

    public function delleteByToken ($token)
    {
        $token = new Token($token);

        $token_hash = $token->get-hash();

        $this->where('token_hash', $token_hash)
             ->delete();
    } 

    public function deleteExpired()
    {
        $this->where('expires_at <', date('Y-m-d H:i:s'))
             ->delete();

        return $this->db->affectedRows();
    }
}