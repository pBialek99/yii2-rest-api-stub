<?php

namespace common\modules\user\models;

use yii\web\IdentityInterface;
use yii\db\ActiveRecord;
use \Lcobucci\JWT\Token;

/** 
 * User identity model.
 * 
 * Represents an application user and provides identity methods
 * required by Yii authentication mechanism.
 */
class User extends ActiveRecord implements IdentityInterface
{
    /** 
     * Returns the database table name.
     * 
     * @return string
     */
    public static function tableName(): string
    {
        return '{{%user}}';
    }

    /**
     * Finds an identity by its primary key.
     *
     * @param int|string $id
     * 
     * @return IdentityInterface|null
     */
    public static function findIdentity(int|string $id): ?IdentityInterface
    {
        return null;
    }

    /**
     * Finds identity by the given access token.
     *
     * @param Token $token
     * @param string|null $type
     * 
     * @return IdentityInterface|null
     */
    public static function findIdentityByAccessToken(Token $token, $type = null): ?IdentityInterface
    {
        foreach (self::$users as $user)
        {
            if ($user['id'] === (string) $token->getClaim('uid'))
            {
                return new static($user);
            }
        }
        
        return null;
    }

    /**
     * Returns the unique identifier for the current identity.
     * 
     * @return int|string
     */
    public function getId(): int|string
    {
        return $this->id;
    }

    /**
     * Returns the authentication key.
     * 
     * @return string|null
     */
    public function getAuthKey(): ?string
    {
        return null;
    }

    /** 
     * Validates the given authentication key.
     * 
     * @param string $authKey
     * 
     * @return bool
     */
    public function validateAuthKey($authKey): bool
    {
        return false;
    }
}