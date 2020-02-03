<?php

declare(strict_types=1);

namespace :vendor\:package_name;

class Starter
{
    private string $authorName;
    private string $authorUsername;
    private string $authorWebsite;
    private string $authorEmail;
    private string $vendor;
    private string $packageName;
    private string $packageDescription;

    public function __construct(
        string $authorName,
        string $authorUsername,
        string $authorWebsite,
        string $authorEmail,
        string $vendor,
        string $packageName,
        string $packageDescription
    )
    {
        $this->authorName = $authorName;
        $this->authorUsername = $authorUsername;
        $this->authorWebsite = $authorWebsite;
        $this->authorEmail = $authorEmail;
        $this->vendor = $vendor;
        $this->packageName = $packageName;
        $this->packageDescription = $packageDescription;
    }

    public function getAuthorName(): string
    {
        return $this->authorName;
    }

    public function setAuthorName(string $authorName)
    {
        $this->authorName = $authorName;
    }

    public function getAuthorUsername(): string
    {
        return $this->authorUsername;
    }

    public function setAuthorUsername(string $authorUsername)
    {
        $this->authorUsername = $authorUsername;
    }

    public function getAuthorWebsite(): string
    {
        return $this->authorWebsite;
    }

    public function setAuthorWebsite(string $authorWebsite)
    {
        $this->authorWebsite = $authorWebsite;
    }

    public function getAuthorEmail(): string
    {
        return $this->authorEmail;
    }

    public function setAuthorEmail(string $authorEmail)
    {
        $this->authorEmail = $authorEmail;
    }

    public function getVendor(): string
    {
        return $this->vendor;
    }

    public function setVendor(string $vendor)
    {
        $this->vendor = $vendor;
    }

    public function getPackageName(): string
    {
        return $this->packageName;
    }

    public function setPackageName(string $packageName)
    {
        $this->packageName = $packageName;
    }

    public function getPackageDescription(): string
    {
        return $this->packageDescription;
    }

    public function setPackageDescription(string $packageDescription)
    {
        $this->packageDescription = $packageDescription;
    }
}
