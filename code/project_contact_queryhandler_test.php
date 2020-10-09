<?php

[...]

class GetProjectContactQueryHandlerTest
{
    public function testGetProjectContact(): void
    {
        $query = new GetProjectContactQuery();
        $query->setProjectId(1);
        $query->setContactId(1);
        
        $projectRepo = $this->createMock(ProjectRepositoryInterface::class);
        $projectRepo
            ->method('findById')
            ->with($query->getProjectId())
            ->willReturn(new Project());
        
        // Mocks of other required Doctrine repositories and return values
        
        $handler = new GetProjectContactQueryHandler([...]);
        $response = $handler($query);
        
        self::assertInstanceOf(ProjectContactResponse::class, $response);
        self::assertSame($query->getContactId(), $response->getContactId());
        // Other assertions
    }
    
    [...]
}
