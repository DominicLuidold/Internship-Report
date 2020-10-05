<?php

[...]

final class UpdateRegionCommand
{
    /**
     * @Assert\NotNull
     * @Assert\Positive(message="Id should be a positive integer.")
     */
    private int $id;
    
    /**
     * @Assert\NotBlank(message="Regulations should not be blank.")
     * @Assert\Length(max=65535)
     */
    private string $regulations;
    
    // Publicly accessible getters
    
    // Publicly accessible setters
}
