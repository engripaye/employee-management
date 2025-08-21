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

    public Employee updateEmployee(Long id, Employee updatedEmployee){
        Employee existing = getEmployeeById(id);
        existing.setName(updatedEmployee.getName());
        existing.setRole(updatedEmployee.getRole());
        return employeeRepository.save(existing);
    }

    public Employee getEmployeeById(Long id) {
        return employeeRepository.findById(id)
                .orElseThrow(() -> new RuntimeException("Employee not found"));
    }


    public void deleteById(Long id) {
        if(employeeRepository.existsById(id)){
            employeeRepository.deleteById(id);
        } else {
            throw new RuntimeException("Employee with " + id + " not found");
        }

    }
}
