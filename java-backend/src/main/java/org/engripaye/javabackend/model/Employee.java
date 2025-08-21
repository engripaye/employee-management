package org.engripaye.javabackend.model;

import jakarta.persistence.*;

import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;

@Entity
@Data
@NoArgsConstructor   // generates default constructor
@AllArgsConstructor  // generates constructor with all fields
public class Employee {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;

    private String name;
    private String role;
    @Version
    private Integer version; // Hibernate will use this column for optimistic locking
}
