# Read about factories at https://github.com/thoughtbot/factory_girl

FactoryGirl.define do
  factory :lecture do
    title "MyString"
    section "MyString"
    course_id 1
    active false
  end
end
