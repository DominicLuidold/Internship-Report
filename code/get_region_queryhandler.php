<?php

[...]

final class GetRegionQueryHandler
{
    // Dependency injection of Doctrine repository, etc.
    
    public function __invoke(GetRegionQuery $query): RegionResponse
    {
        $region = $this->repo->findById($query->getId());
        if (!$region) {
            throw new HttpNotFoundException();
        }
        
        return new RegionResponse($region);
    }
}
