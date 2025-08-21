package org.engripaye.javabackend.repository;

import org.engripaye.javabackend.model.Employee;
import org.springframework.data.jpa.repository.JpaRepository;

public interface EmployeeRepository extends JpaRepository<Employee, Long> {

}
