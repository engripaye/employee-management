package org.engripaye.javabackend.service;

import lombok.AllArgsConstructor;
import org.engripaye.javabackend.model.Employee;
import org.engripaye.javabackend.repository.EmployeeRepository;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
@AllArgsConstructor
public class EmployeeService {

    private final EmployeeRepository employeeRepository;

    public List<Employee> getAllEmployee() {
        return employeeRepository.findAll();
    }

    public Employee saveEmployee(Employee employee){
        return employeeRepository.save(employee);
    }


    public void deleteById(Long id) {
        if(employeeRepository.existsById(id)){
            employeeRepository.deleteById(id);
        } else {
            throw new RuntimeException("Employee with " + id + " not found");
        }

    }
}
