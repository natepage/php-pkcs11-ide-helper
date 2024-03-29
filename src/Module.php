<?php

namespace Pkcs11;

class Module
{
    public function __construct(string $modulePath)
    {
    }

    public function C_CloseSession(Session $session)
    {
    }

    public function C_CopyObject(
        Session $session,
        P11Object $object,
        array $template,
        ?P11Object $phNewObject = null,
    ) {
    }

    public function C_CreateObject(Session $session, array $template, ?P11Object $phObject = null)
    {
    }

    public function C_Decrypt(Session $session, string $encryptedData, ?string $data = null)
    {
    }

    public function C_DecryptInit(Session $session, Mechanism $mechanism, int $key)
    {
    }

    public function C_DestroyObject(Session $session, P11Object $object)
    {
    }

    public function C_Digest(Session $session, string $data, ?string $digest = null)
    {
    }

    public function C_DigestFinal(Session $session, ?string $digest = null)
    {
    }

    public function C_DigestInit(Session $session, Mechanism $mechanism)
    {
    }

    public function C_DigestKey(Session $session, Key $key)
    {
    }

    public function C_DigestUpdate(Session $session, string $part)
    {
    }

    public function C_Encrypt(Session $session, string $data, ?string $encryptedData = null)
    {
    }

    public function C_EncryptInit(Session $session, Mechanism $mechanism, int $key)
    {
    }

    public function C_FindObjects(Session $session, ?array $Objects = null, int $MaxObjectCount)
    {
    }

    public function C_FindObjectsFinal(Session $session)
    {
    }

    public function C_FindObjectsInit(Session $session, array $template)
    {
    }

    public function C_GenerateKey(
        Session $session,
        Mechanism $mechanism,
        array $template,
        ?IS_LONG $phKey = null,
    ) {
    }

    public function C_GenerateKeyPair(
        Session $session,
        Mechanism $mechanism,
        array $pkTemplate,
        array $skTemplate,
        ?Key $phPublicKey = null,
        ?Key $phPrivateKey = null,
    ) {
    }

    public function C_GenerateRandom(Session $session, int $RandomLen, ?string $pRandomData = null)
    {
    }

    public function C_GetAttributeValue(Session $session, int $object, array $template)
    {
    }

    public function C_GetInfo(?array $pInfo = null): array
    {
    }

    public function C_GetMechanismInfo(int $slotId, int $type, ?array $pInfo = null)
    {
    }

    public function C_GetMechanismList(int $slotId, ?array $pMechanismList = null): array
    {
    }

    public function C_GetSessionInfo(Session $session, ?array $pInfo = null)
    {
    }

    public function C_GetSlotInfo(int $slotId, ?array $pInfo = null)
    {
    }

    public function C_GetSlotList(bool $tokenPresent, ?array $pSlotList = null): array
    {
    }

    public function C_GetTokenInfo(int $slotId, ?array $pInfo = null)
    {
    }

    public function C_InitPIN(Session $session, string $newPin)
    {
    }

    public function C_InitToken(int $slotid, string $label, string $sopin)
    {
    }

    public function C_Login(Session $session, int $loginType, string $pin)
    {
    }

    public function C_Logout(Session $session)
    {
    }

    public function C_OpenSession(
        int $slotID,
        int $flags,
        ?string $pApplication = null,
        ?callable $notify = null,
        ?Session $hSession = null,
    ): Session {
    }

    public function C_SeedRandom(Session $session, string $Seed)
    {
    }

    public function C_SetPIN(Session $session, string $oldPin, string $newPin)
    {
    }

    public function C_Sign(Session $session, string $data, ?string $signature = null)
    {
    }

    public function C_SignInit(Session $session, Mechanism $mechanism, int $key)
    {
    }

    public function C_Unwrap(
        Session $session,
        Mechanism $mechanism,
        ?int $keyId = null,
        string $encryptedData,
        array $template,
    ) {
    }

    public function C_Verify(Session $session, string $data, string $signature)
    {
    }

    public function C_VerifyInit(Session $session, Mechanism $mechanism, int $key)
    {
    }

    public function C_WaitForSlotEvent(?int $php_flags = null, ?int $php_slotID = null)
    {
    }

    public function C_Wrap(
        Session $session,
        Mechanism $mechanism,
        int $keyId,
        int $targetKeyId,
        ?string $ciphertext = null,
    ) {
    }

    public function getInfo(): array
    {
    }

    public function getMechanismInfo(int $slotId, int $mechanismId): array
    {
    }

    public function getMechanismList(int $slotId): array
    {
    }

    public function getSlotInfo(int $slotId): array
    {
    }

    public function getSlotList(): array
    {
    }

    public function getSlots(): array
    {
    }

    public function getTokenInfo(int $slotId): array
    {
    }

    public function initToken(int $slotid, string $label, string $sopin)
    {
    }

    public function openSession(
        int $slotid,
        int $flags,
        ?string $application = null,
        ?callable $notify = null,
    ): Session {
    }

    public function waitForSlotEvent(?int $php_flags = null)
    {
    }
}
